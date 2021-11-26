@extends('layouts.app')

@section('content')
    <!--welcome section -->
    <section id="welcome">
        <div class="container d-flex justify-content-center">
            <div class="row">           
                <div class="col mx-auto">
                    <img src="{{ url('images/logo4.png')}}" alt="angličtina chrudim" class="welcomeimage">
                    <h4 class="head-title">Soukromě, v malý skupince, živě i po skypu. Na cesty, na zkoušky, k maturitě i do baru!</h4>
                    <p class="price-text mb-0" style="font-weight:900">Naučím tě English, chceš?</p>
                    <div class="arrow bounce">
                        <a href="#about">
                            <p class="find-more" style="align-items:center">Více info</p>
                            <i class="fas fa-angle-double-down arrow-size"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About section -->
    <section id="about"> 
        <div class="jumbotron box-shad">
            <div class="container">
                <h2 class="d-flex justify-content-center my-3 my-md-5" style="align-items:center"><i class="fas fa-user-check mr-4 d-none d-sm-block"></i>Proč se učit u mně?</h2>
                <div class="row">
                    <div class="d-flex  mx-auto">
                        <div class="mb-3 mb-md-5">
                            <video class="video" controls>
                                <source src="{{ url('video/TalkingSheepPromo.mp4')}}" type="video/mp4">
                            </video>
                        </div>
                    </div>                       
                </div>
            
                <div class="row">
                    <div class="col-md-6">
                        <img class="w-75 shadow" src="{{ url('images/index1.jpg') }}" alt="anglictina Chrudim">
                    </div>
                    <div class="col-md-5 d-flex flex-column justify-content-center mt-3">
                        <div class="text">
                            <h3>Co nabízím? </h3>
                            <p >Výuka hravým stylem, pohodová přátelská atmoška, vtípky, real talks. Žádná cvičení v učebnici, ale povídání o tom, co tě zájímá. </p>
                            <h3>Co když mi to nesedne?</h3>
                            <p>Pokud se po prvním měsíci rozhodneš, že nebudeš pokračovat, vrátím ti půlku peněz. To je fér business offer, ne?</p>
                        </div>
                    </div>
                    
                <div class="row mt-md-5">
                    <div class="col-md-5 d-flex flex-column justify-content-center text">
                        <h3>Kolik to stojí?</h3>
                        <p>Informace k cenám najdeš v <a href="/prices" class="link">ceníku</a></p>
                        <h3>A Ještě něco k tomu?</h3>
                        <p>Konverzační procházky spojené s venčením psisek. Strukturované online cally s rodilými mluvčími.</br></br>
                            Více informací o mě najdeš v sekci <a href="/info" class="link">informace</a>.</br>
                            Více informací k výuce a ke kurzům najdeš v sekci <a href="/applicants" class="link">Pro zájemce</a>
                        </p>
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <img class="w-75 shadow" src="{{ url('images/index2.jpg') }}" alt="anglictina Chrudim">
                    </div>
                </div>
            </div>
                <div class="row mt-5">
                    <div class="col text-center text">
                        <p>Pokud jsi naladěn dát si u mě měsíc na zkoušku, nech mi tu na sebe Kontakt.</br> 
                            Spojíme se a najdeme pro tebe nejvhodnější varianty ;)
                        </p>
                    </div>
                </div>  
                
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
        </div>
    </section>

    <section id="pricelist">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col">
                    <h2 class="d-flex justify-content-center mb-5" style="align-items:center"><i class="fas fa-location-arrow mr-4 d-none d-sm-block"></i>Lokalita</h2>
                    <p class="price-text">
                        <strong>Chrudim a okolí</strong> ( Pardubice, Hlinsko, Vysoké Mýto ). 
                    </p>
                    <div class="d-flex justify-content-center ml-4" style="align-items:center; font-size:17px">
                        <a href="/applicants" class="btn-4 mt-5" style="font-weight: bold"><i class="fas fa-arrow-circle-down mr-2 spin"></i>Zajímá tě více?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
