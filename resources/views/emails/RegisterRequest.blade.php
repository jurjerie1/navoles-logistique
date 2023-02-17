@component('mail::message')


Bonjour, <br>

Vous avez été inviter à rejoindre l'entreprise : {{ $entreprise }}.<br>

Pour finir vous inscription il vous suffit de remplir quelques information en cliquant sur le bouton suivant :

@component('mail::button', ['url' => config('app.url').'/register/'.$create_compte.'/edit', 'color' => 'blue'])
Je finalise mon inscription
@endcomponent

Merci de votre compréhension,<br>
Bien à vous <br>
{{ config('app.name') }}
@endcomponent