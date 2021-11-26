@component('mail::message')
# Welcome to the Talking Sheep English Club

Thank you for your registration.
(Díky za tvou registraci)
<br>
<br>
<img src="{{ url('https://cdn.pixabay.com/photo/2013/07/13/12/39/sheep-160041_960_720.png')}}" style="width:30%" alt="sheep">
<br>
Everytime I check your uploaded homework, you will recieve an email.
(Pokaždé když zkontroluji a opravím tvůj úkol, obdržíš informační email).

@component('mail::button', ['url' => 'https://www.talkingsheepenglish.cz', 'target' => '_blank'])
Přejít na stránku
@endcomponent

# Let's learn and have fun,<br>
# Talking Sheep English
@endcomponent
