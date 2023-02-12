@component('mail::message')


Bonjour {{ $user }}, <br>

La mission de {{ $mission->dPays }} à {{ $mission->aPays }}, qui a était enregistré le {{ $mission->created_at }} doit être mise à jours<br>

Justification et la liste des champs à modifier: <br>
    {!! $mission->justification !!}


Pour modifier votre mission merci de cliquer sur le bouton suivant ou de venir sur la partie vos missions :

@component('mail::button', ['url' => config('app.url').'/mission/'.$mission->id.'/edit', 'color' => 'blue'])
Je mes à jours ma mission
@endcomponent

Merci de votre compréhension,<br>
Bien à vous <br>
{{ config('app.name') }}
@endcomponent