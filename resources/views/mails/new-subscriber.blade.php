@component('mail::message')
Dear {{ $user->name }}

Thank you for the subscription to our Adhya Shakti Mataji Temple.

You can have look for the events at the temple:
@component('mail::button', ['url' => '/events'])
Events 
@endcomponent

Thanks,<br>
Adhya Shakti Mataji Temple
@endcomponent