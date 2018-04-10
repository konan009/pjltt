@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            PJT Travel and Tour
        @endcomponent
    @endslot
# Welcome to PJL Travel and Tour

Please use this code to confirm your email address {{$data}}
    {{-- Subcopy --}}
    @slot('subcopy')
        @component('mail::subcopy')
            <!-- subcopy here -->
        @endcomponent
    @endslot


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            Copyright © 2018
        @endcomponent
    @endslot
@endcomponent
