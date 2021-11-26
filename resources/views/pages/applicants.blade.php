@extends('layouts.app')

@section('content')
    <section id="applicants">
            <div>
                <h2 class="applicants-title mb-3 mb-md-5" >Vítej - Welcome!</h2>
                <p class="courses">Pokud se chceš přidat do gangu mých studentů, máš na výběr z několika možností</p>
            </div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="container-fluid" id="cards">
            <div class="container">
                <div class="row mb-1">
                    <div class="col-md-4 d-flex">
                        <card class="card card-frame shadow slide1">
                            <div class="text-center p-3">
                                <h3 class="py-3" style="color:white">NA ŽIVO / ONLINE</h3>
                                <p style="background-color:white; border-radius:28px; padding:1rem" class="shadow">
                                Kurzy poběží naživo v Chrudimi, a také online po síti skrze videohovory pro ty, kteří to
                                mají za námi daleko. Pokud jsi z vesnice vedle a zvažuješ, zda se učit se mnou na živo, 
                                nebo online, doporučuji se „hecnout“ a jít do toho s námi na živo.</br></br> Při výuce na živo totiž
                                můžeme využít spoustu super výukových technik a metod, které jsou při online výuce částečně
                                omezené. Výuka na živo je díky tomu šťavnatější a výživnější, a studenta ještě více vtáhne                            
                                do dění.</br></br> Online výuku využívají především studenti, kteří chtějí individuální lekce, nebo
                                ti kteří jsou opravdu daleko. Nicméně i pár online skupinek už mám odučeno.
                                </p>
                            </div>
                        </card>
                    </div>
                    <div class="col-md-4 d-flex">
                        <card class="card card-frame shadow slide2">
                        <div class="text-center p-3">
                                <h3 class="py-3" style="color:white">S ÚVODNÍM VÍKENDEM / BEZ ÚVODNÍHO VÍKENDU</h3>
                                <p style="background-color:white; border-radius:28px; padding:1rem" class="shadow">
                                Na úvodním výukovém víkendu v září budeš mít možnost se potkat se členy tvého budoucího 
                                studijního gangu, zbavit se ostychu z mluvení snadno a rychle a zároveň si oťukat, v čem
                                že tedy vlastně je ta moje výuka tak jiná. </br></br>
                                Budou k dispozici dvě varianty:
                                </p>
                                <ul style="background-color:white; border-radius:28px; padding:1rem; list-style:none" class="shadow">
                                    <li><strong style="text-decoration:underline">Víkend v Podkrkonoší</strong> - se stravou a ubytováním, výukou, hrami, výlety</li>
                                    </br>
                                    <li><strong style="text-decoration:underline">Víkend v Chrudimi</strong> - dopolední a odpolední výuka a hry</li>
                                </ul>
                            </div>
                        </card>
                    </div>
                    <div class="col-md-4 d-flex">
                        <card class="card card-frame shadow slide3">                        
                            <div class="text-center p-3">
                                <h3 class="py-3" style="color:white">NA POHODU / INTENZIVNĚ</h3>
                                <p style="background-color:white; border-radius:28px; padding:1rem" class="shadow">
                                Na pohodu znamená jednou týdně na 2 hodiny. Intenzivně znamená dvakrát týdně na 2 hodiny. 
                                Na pohodu si to dej, pokud na angličtinu nemáš tolik času, chceš se zlepšit, ale nemáš v 
                                plánu se do toho opřít silou. Intenzivně si to dej, pokud se chceš rychle posunout, máš 
                                odhodlání a jsi rozhodnutý tomu věnovat nemalou časovou dotaci.</br></br>
                                V obou případech počítej se zadávanými domácími úkoly, který jsou dalším chytře investovaným 
                                časem do tvého vzdělání, i časem na samostudium které zadávám, například filmy, knížky
                                (ale neboj, žádná nuda to nebude!)
                                </p>
                            </div>
                        </card>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 d-flex">
                    <card class="card card-frame shadow">
                    <div class="text-center p-3">
                                <h3 class="py-3" style="color:white">INDIVIDUÁLNĚ / VE SKUPINĚ</h3>
                                <p style="background-color:white; border-radius:28px; padding:1rem" class="shadow">
                                Tady záleží na tvých preferencích. Na individuální výuce je čas jen tvůj, na skupinovkách je
                                zase fajn poznat další namotivované studenty, a vystřídat více parťáků, s kterými během lekce
                                mluvíš.
                                </p>
                            </div>                         
                        
                    </card>
                </div>
                <div class="col-md-6 d-flex">
                <card class="card card-frame shadow">                        
                        <div class="text-center p-3">
                            <h3 class="py-3" style="color:white">MOŽNOSTI PLACENÍ</h3>
                            <p style="background-color:white; border-radius:28px; padding:1rem" class="shadow">
                            Platba funguje formou předplácení si počtu lekcí dle předem dohodnuté intenzity. Můžeš si
                            předplácet každý měsíc zvlášť, a nebo 3 měsíce, půl roku, či celý rok, na což se vztahují 
                            také odpovídající slevy.
                            </p>
                        </div>
                    </card>
                </div>
            </div>
        </div>  
</div>    
            
            <!-- <div class="row">
                <div class="col">
                    <p class="py-5 text-center blue-title">
                        TAK! MÁŠ ČAS O TOM POPŘEMÝŠLET <i class="em em-grinning ml-1" aria-role="presentation" aria-label="GRINNING FACE"></i>
                        Detailní informace se k tobě určitě dostanou zavčasu.
                    </p>
                </div>
            </div> -->
        <div class="container">
        <div class="row">
                <div class="col">
                    
                    
                    <div class="courses pt-5">
                        <p>V průběhu září 2021 se spustí tyto kurzy:</p>
                        <ul style="list-style:none; font-size:20px; align-items:center">
                            <li><i class="fab fa-leanpub mr-2" style="color:#c51f1a"></i>Baby sheep (začátečník)</li>
                            <li><i class="fab fa-leanpub mr-2" style="color:#c51f1a"></i>Pupil sheep (mírně pokročilý)</li>
                            <li><i class="fab fa-leanpub mr-2" style="color:#c51f1a"></i>Sheep student (středně pokročilý)</li>
                            <li><i class="fab fa-leanpub mr-2" style="color:#c51f1a"></i>Adult sheep (pokročilý)</li>
                        </ul>
                        <p>
                            <strong style="font-size:18px">Bude to jiné, bude to sranda, bude to hravé a bude to efektivní. Buď u toho!</strong></br>
                            Nejdříve však proběhne online hovor či osobní setkání. To abych zjistila do které kategorie si tě zařadit ;)</br>
                            Pobavíme se o všech možnostech a variantách, a vybereme pro tebe to nejvhodnější.</br></br>
                            <strong style="font-size:18px">První měsíc na zkoušku.</strong></br>
                            Pokud ti lekce nesednou a nebudeš chtít pokračovat, půlka peněz se vrátí do tvé peněženky.
                            Fér business offer, ne?
                        </p>
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn-4 my-3" style="font-weight:bold; font-size:17px" data-toggle="collapse" data-target="#apply"><i class="fas fa-arrow-circle-down mr-3 spin"></i>Chci to zkusit!</a>
                        </div>
                        <div id="apply" class="collapse">
                            <p>
                                Výborně! 
                                Slibuji že svého rozhodnutí nebudeš litovat!
                                Nech mi tady na sebe telefonní a emailový kontakt, brzy se ti ozvu s nabídkou termínu na video-hovor. Ten může proběhnout buď přes whatsapp nebo google meet. Jsou to ty nejjednodušší varianty a s oběma ti můžu poradit :)
                            </p>
                            <hr>
                            <div class="row">
                    <div class="my-3 my-md-5 col-md-6 offset-md-3">
                    <div class="card box-shad">
                        <div class="card-header text-center font-weight-bold forms">Kontaktní formulář</div>
                        <div class="card-body text-center">
                        <form method="POST" action="{{ route('apply') }}">
                                @csrf
                                <div class="form-group">
                                <label for="name" class="form-label">Jméno a Přijmení</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            <div class="form-group">
                                <label for="email" class="form-label">E-mailová adresa</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Telefonní číslo</label>
                                    <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror     
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-4" style="color:white; font-weight:700">
                                    Odeslat
                                </button>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                        </div>
                        <div class="my-3">
                            <h4 class="d-flex justify-content-center mt-4 darkred">Těší se na tebe!</h4>
                            <h4 class="d-flex justify-content-center mt-4 darkred"> Moni and the Talking Sheep</h4>
                            <div class="d-flex justify-content-center">
                                <img src="{{ url('images/welcome.png')}}" alt="english" style="height:100px; width:100px"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
            
        </div> 
    </section>
@endsection

