@component('mail::message')

# Welcome {{ $user->name }}

You just logged-in with your Twitter account.

@include('quick-socialite::emails.social.partials._liked-accounts')

Thanks,<br>
{{ config('app.name') }}
@endcomponent
