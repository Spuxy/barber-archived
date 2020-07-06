@component('mail::message')
    #Hello {{$firstName}} {{$lastName}} !

    We have received your email!

    We are going to answer to you soon as we can
    @component('mail::panel')
        @component('mail::button',['url' => '','color'=>'success'])
            Visit Barber
        @endcomponent
    @endcomponent

@endcomponent
