@component('mail::message')
# Vítá Vás Talking Sheep English

Děkujeme Vám za registraci.

@component('mail::button', ['url' => 'https://www.talkingsheepenglish.cz', 'target' => '_blank'])
Přejít na stránku
@endcomponent

Děkujeme,<br>
{{ config('app.name') }}
@endcomponent
