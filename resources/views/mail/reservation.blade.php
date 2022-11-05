@component('mail::message')
<p>new reservation has been placed by user with this email {{ $email }}</p>
    @component('mail::button',['url'=>route('index')])
        click here to go to system 
    @endcomponent
@endcomponent