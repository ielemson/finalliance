@component('mail::message')
# Welcome Onboard

<p>Thank you for joining our community. </p> 
<p>We're excited to have you on board.</p>
<p>You will receive a notification once account has been approved.</p>

@component('mail::button', ['url' => config('app.url')])
Explore our website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
