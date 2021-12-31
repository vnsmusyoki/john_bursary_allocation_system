@component('mail::message')
    # Welcome and
    Hi {{ $receiver }}
    #Title:  {{ $topic }}
    {{ $message }}
    Thanks
    {{ config('app.name') }}
@endcomponent
