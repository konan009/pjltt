<?php

namespace App\Http\Controllers;
use App\Tour;
use App\Package;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
use App\User;
use Mail;
use App\Mail\NewUserWelcome;
use PDF;
class UserController extends Controller
{
    public function offerPage(){

		$data['domestic'] = Tour::where('tourtype',1)->get();
		$data['international'] = Tour::where('tourtype',2)->get();
    	return view('offers')->with('data',$data); 
;
    }

    public function pdf($id){
        $data['bookinfo'] = Book::find($id);
        $data['userinfo'] =  Book::find($data['bookinfo']->id)->tour;
        $data['user'] = User::find($data['bookinfo']->user_id);

        $pdf = PDF::loadView('pdf', ['data'=> $data]);
        return $pdf->download('clientss.pdf');
    }

    public function booknowPage($id){
    	$data['package'] = Package::where('tour_id',$id)->get();
    	$data['main'] = Tour::where('id',$id)->get();
    	return view('booknow')->with('data',$data); 
    }

    public function booktour(Request $request){
    	Session::put('Flag', 1);
    	date_default_timezone_set('Asia/Manila');
    	$book = new Book;
    	$book->user_id = Auth::id();
    	$book->status = 0;
    	$book->packageitenary_id = $request->packageid;
    	$book->guest = $request->room_and_guest;
    	$book->remarks = $request->queries;
		$book->departuredate =  date("Y-m-d H:i:s" ,strtotime($request->date));
    	$book->enddate = date("Y-m-d H:i:s" ,strtotime("now")+86400);
    	$book->save();
    	return redirect()->route('book');
    }


    public function bookRequests(){
    	$data['list'] = array();

		$booklist = User::find(Auth::id())->book;
		foreach ($booklist as $key ) {
			$row = array();
			array_push($row,$key->id);
            if($key->status==1){
                array_push($row,'Approved');
            }elseif($key->status==4){
                array_push($row,'Rejected');
            }elseif(strtotime($key->enddate)<strtotime("now")){
                array_push($row,'Expired');
            }else{
                array_push($row,'Pending');
            }
			$price = Tour::find($key->packageitenary_id);

			array_push($row,$price->price*$key->guest);
			array_push($row,$price->title);

			array_push($data['list'],$row);
		}

    	return view('booklist')->with('data',$data); 
    }


    public function adminHome(){
        $data['list'] = array();

        $booklist = Book::orderByDesc('enddate')->get();
        foreach ($booklist as $key ) {
            $row = array();
            array_push($row,$key->id);
            if($key->status==1){
                array_push($row,'Approved');
            }elseif($key->status==4){
                array_push($row,'Rejected');
            }elseif(strtotime($key->enddate)<strtotime("now")){
                array_push($row,'Expired');
            }else{
                array_push($row,'Pending');
            }
            $price = Tour::find($key->packageitenary_id);

            array_push($row,$price->price*$key->guest);
            array_push($row,$price->title);

            array_push($data['list'],$row);
        }
    	return view('admin.adminhome')->with('data',$data); 
    }

    public function email(){
        $data = 'Sample';


        Mail::to('ugaddanmeljohn@gmail.com')->send(new NewUserWelcome($data));
        return 'Hello';

    }

    public function adminbookstatus($id){
        $data['bookinfo'] = Book::find($id);
        $data['userinfo'] =  Book::find($data['bookinfo']->id)->tour;
        $data['user'] = User::find($data['bookinfo']->user_id);
        return view('admin.adminviewbook')->with('data',$data); 
    }
    
    public function confirm(Request $request){
        $user = User::find(Auth::id());

        if($request->code===$user->mail->code){
            $user->email_conf = 1;
            $user->save();
        }
        return redirect()->back();
    }

    public function approve(Request $request){
        $book = Book::find($request->id);
        $book->status = 1;
        $book->save();
        return redirect('admin');
    }

    public function reject(Request $request){
        $book = Book::find($request->id);

        $book->status = 4;
        $book->save();
        return redirect('admin');
    }

    public function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
        }

}
