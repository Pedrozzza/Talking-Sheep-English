@extends('layouts.app')

@section('content')
    <section id="welcomepage">
        <div class="container">
            <h2 class="h2title">Welcome to the TALKING SHEEP club! </h2>
            <img src="{{ url('images/welcome.png') }}" alt="chrudim" class="welcomepicture">
            <h3 class="h3title">Don't you speak English? No worries. You will 
                <i class="em em-full_moon_with_face ml-1" aria-role="presentation" aria-label="FULL MOON WITH FACE"></i>
            </h3>
            <p class="text">Pro ješte vetší užitek z výuky a taky pro trochu srandy lajkni naši facebookovu stránku 
            <strong>
                <a class="blue" style="font-size:1.1rem" href=" https://www.facebook.com/talking.sheep.english" alt="facebook" target="_blank">talking sheep english</a>
            </strong>
                  a v nastavení této stránky
                 - si otevři možnost <strong>sledovat</strong> (follow) a zobrazí se ti možnosti nastavení - klepni na <strong>oblíbené </strong>
                 (favourities). Dále klepni na nastavení <strong>upozornění</strong> (notification) - příspěvky - a zde změn nastavení
                  na <strong class="darkred">STANDARD</strong>. </br><br>
                 Díky tomuto nastavení by ti nic nemělo uniknout. Na této facebookové stránce se jednou
                 či dvakrát do týdne objeví nějaký vtípek, rčení, citát, či jiná sranda, s pár novými slovíčky pro
                 pobavení i rozvíjení tvé slovní zásoby.
            </p>
        </div>
    </section>
    
    
@endsection

