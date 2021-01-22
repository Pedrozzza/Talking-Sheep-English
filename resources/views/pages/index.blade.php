@extends('layouts.app')

@section('content')
    <!--welcome section -->
    <section id="welcome">
        <div class="container d-flex justify-content-center">
            <div class="row">           
                <div class="mx-auto">
                    <img src="{{ url('images/logo4.png')}}" alt="english" class="welcomeimage">
                    <h4 class="mt-2 mb-4 p-4">Soukromě, v malý skupince, živě i po skypu. Na cesty, na zkoušky, k maturitě i do baru</h4>
                    <a href="/folders" class="btn-1">Naučím tě English, Chceš?</a>
                </div>
            </div>
        </div>
    </section>
    <!-- About section -->
    <section id="about">
        <div class="jumbotron box-shad">
            <div class="container d-flex justify-content-center">
                <div class="row">
                    <div>
                        <h2 class="d-flex justify-content-center mb-3">Proč se učit u mně?</h2>
                            <p class="font-weight-bold" style="font-size: 1.1rem">
                                Jmenuju se Moni a žila jsem pár let v zahraničí. Učit mě baví, a baví mě kontakt s lidmi. A najdu ty nejšílenější způsoby, jak zapříčinit, aby to bavilo i tebe! Především budeme <strong class="darkred">MLUVIT<i class="em em-wink ml-1" aria-role="presentation" aria-label="WINKING FACE"></i></strong>
                                Bude to jiné, bude to nové, bude to trhlé a neotřelé. Bude to sranda a navíc si z toho budeš hodně věcí pamatovat! Učíme se, hrajeme hry, a kombinujeme bláznivé věci s neuvěřitelnými, protože čím větší šílenost, tím pro mozek zapamatovatelnější <i class="em em-full_moon_with_face" aria-role="presentation" aria-label="FULL MOON WITH FACE"></i>
                            </p>
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn-2 mt-3 mb-5" style="font-weight: bold" data-toggle="collapse" data-target="#omne">Rozklikni si o mně více</a>
                        </div>
                        <div id="omne" class="collapse">
                            <p class="font-weight-bold">
                            <img src="{{ url('images/about.jpg')}}" alt="teacher" class="aboutimage shadow">
                                Nejdříve jsem 2 roky žila v Anglii, konrétně v Lake District. Pak jsem si střihla ještě rok na Novým Zelí. V&nbspmezičase jsem si ze Zelíčka odskočila na měsíc na Filipíny, a později, po cestě zpět domů jsem to vzala ještě přes pár metropolitních zastávek včetně jednoho měsíce ve Vietnamu.</br>
                                Cestování je úžasná věc, a strávit někde v zahraničí delší dobu než jen víkendovou opalovačku můžu jedině doporučit. Je neuvěřitelně obohacující zkusit si v cizí zemi chvíli žít, nebo i pracovat. Spousta lidí to ale neudělá, i když je to láká, a častou výmluvou je “Neumím anglicky.”</br></br>
                                Prozradím ti tajemství. Taky jsem neuměla anglicky. Na základce mě angičtina nebavila a nosila jsem domů od dvojek až po čtverce. Na střední jsem stále ještě učení se jazyku moc pozornosti nevěnovala, protože jsem měla pocit, že mi to stejně nikdy nepůjde nějak vyjímečně, a že to nebudu stejně nikdy potřebovat. Představovala jsem si, že na to, aby člověk uměl mluvit dobře cizím jazykem se musí prostě narodit extra chytrej, nebo mít nějaký superschopnosti komiksových hrdinů. Ani ve snu mě tehdy nenapadlo, že budu jednou celkem bez obav cestovat po celým světě, žít a pracovat v&nbspzahraničí, natož že bych někdy mohla angličtinu učit.</br></br>
                                A wualaaaa: <strong class="darkred">TADY JSEM</strong><i class="em em-grinning ml-2" aria-role="presentation" aria-label="GRINNING FACE"></i>
                                Jsem jasnej důkaz toho, že žádný superschopnosti nejsou potřeba. Stačí se rozhodnout, že na tom chci pravidelně pracovat, a&nbspže pro to chci něco dělat. No, a pak je samozřejmě důležitý učit se to tak, aby mě to nenudilo, neštvalo, neotravovalo a nebolelo. Už dávno se ví, že mozek si všecko mnohem líp zapamatuje, když k tomu vidí obrázky, videa, nebo je to proložené nějakým pohybem, když si s tou látkou může hrát, a když to prostě celé má pořádný kontext. Pokud se opakovaně snažíme si prostě jen zapamatovat to, co se pokoušíme naučit, často to nefunguje. Co to zkusit jinak? Zkusit si vytvořit vzpomínku, ve které je zahrnuté to, co se pokoušíme naučit. Pro spoustu lidí takový způsob učení funguje mnohem lépe<i class="em em-full_moon_with_face ml-1" aria-role="presentation" aria-label="FULL MOON WITH FACE"></i></br>
                                Učit mě baví, a baví mě kontakt s lidmi. A najdu ty nejšílenější způsoby, jak zapříčinit, aby to bavilo i tebe! Bude to jiné, bude to nové, bude to trhlé a&nbspneotřelé. Bude to sranda a navíc si z toho budeš hodně věcí pamatovat! Učíme se s kontextem, hrajeme hry, a kombinujeme bláznivé věci s&nbspneuvěřitelnými, protože čím větší šílenost, tím pro mozek zapamatovatelnější  <i class="em em-full_moon_with_face ml-1" aria-role="presentation" aria-label="FULL MOON WITH FACE"></i> </b>             
                                Pořádáme občasné konverzační procházky, pikniky, večery u vína! Socializace, sranda + English  <i class="em em-full_moon_with_face ml-1" aria-role="presentation" aria-label="FULL MOON WITH FACE"></i></br></br>
                            </p>    
                                <h3 class="d-flex justify-content-center mb-3">Moje kvalifikace</h3>
                            <p class="font-weight-bold mb-5"> Nemám akademické vzdělání na výuku angličtiny. Znám spoustu lidí, co ano. Ale ačkoliv angličtině dokonale rozumí, a znají perfektně všechny zákonitosti, nemají nervy na to, někoho to učit. Někteří na to zase mají nervy, ale když se jich zeptáte na “Proč je to takhle a proč to nemůže být onak” - odpoví vám složitou šifrou mistra Leonarda, která místo odpovědi přinese do vašich hlav jen více otazníků <i class="em em-grinning ml-1" aria-role="presentation" aria-label="GRINNING FACE"></i> </br>
                                Já jsem jeden z vás. Byla jsem s angličtinou dlouho tam kde vy, ať už si svou aktuální pozici definujete jakkoliv, a pokud jste u toho sprostí, tak ano, i tam jsem byla <i class="em em-grinning ml-1" aria-role="presentation" aria-label="GRINNING FACE"></i> Moje kvalifikace je získaná praxí - životem a prací v zahraničí, a doplněná samostudiem. No a mám na to už i ten papír ! certifikát z Cambridge:) </br></br>
                                Pro studenty, kteří chtějí vést jednou obchodní jednání na Manhattnu je všude kolem spousta akademicky vzdělaných učitelů angličtiny.</br>
                                Já se chci ale zaměřit na vás, kteří si chcete být schopní zařídit věci na cestách, pokecat u bazénu s fešákem z vedlejšího hotelovýho pokoje, sehnat si v&nbspcizí zemi parťáka na třídenní tůru horami, nebo se prostě jen zeptat na cestu. A také na vás, školou povinné studenty, kteří prostě mají v té angličtině stále chaos! No a v neposlední řadě na malý špunty, u kterých je důležitý vzbudit radost a nadšení pro jazyk dříve, než to případně školní systém výuky jazků stihne kompletně zabít.</br></br>
                                Po tom co jsem si zažila na cestách, jsem se rozhodla, že chci pomáhat lidem, kteří se bojí do zahraničí vyjet kvůli jazyku. Chci pomáhat přemoci toho bubáka, který lidi brzdí v rozletu. Protože věřte mi, ono to vůbec není tak těžké, se prostě sebrat a někam vyrazit. Stačí se v jazyce základně zorientovat, a&nbsps&nbsptím vám pomohu! <i class="em em-full_moon_with_face ml-1" aria-role="presentation" aria-label="FULL MOON WITH FACE"></i> </br>
                                Je důležitý se přestat bát promluvit. A pak se věci začnou dít. Díky tomu, že jsem se vydala do zahraničí a donutila se tak mluvit, i přesto že to tehdy zdaleka ještě nebylo perfetní, jsem zažila spoustu neuvěřitelně úžasných věcí. Ale o tom si můžeme vyprávět později, v angličtině, naživo  <i class="em em-wink ml-1" aria-role="presentation" aria-label="WINKING FACE"></i> </br>
                            </p>
                        </div>
                    </div>
                    <div>
                        <h2 class="d-flex justify-content-center mb-3">Jak probíhá výuka?</h2>
                            <p class="font-weight-bold" style="font-size: 1.1rem">
                            V lekcích hodně mluvíme, a snažíme se vše naučené hned používat v rozhovoru. Sem tam si zahrajeme hru, nebo si přeložíme text nějaký jednoduchý fajn písničky, kterou si i zazpíváme, takže v lekcích panuje dobrá nálada. Věnujeme pozornost i&nbsphovorový angličtině, protože to je ta, kterou od lidí kolem uslyšíte, a je důležitý jí rozumět <i class="em em-full_moon_with_face ml-1" aria-role="presentation" aria-label="FULL MOON WITH FACE"></i></br>
                            Zásadní je vybudovat si k angličtině dobrej vztah, a chuť se dále zlepšovat i mimo lekce. Vysvětlím ti fajn způsoby, jak si můžeš sám rozšiřovat slovní zásobu nenásilnou a zábavnou formou, a jak svůj mozek postupně dostat do správného naladění na rychlejší progress <i class="em em-wink ml" aria-role="presentation" aria-label="WINKING FACE"></i></br></br>
                            Nepotřebuješ si pořizovat žádnou učebnici, stačí jeden velký sešit, a jeden malý. A barevná pera! Občas si pustíme i nějaké nahrané rozhovory, na trénink poslechu, a materiály k těmto tréninkům vám vždy dodám v lekci <i class="em em-wink" aria-role="presentation" aria-label="WINKING FACE"></i></br>
                            Lekce zatím probíhají u mě.  Kolem  je spousta praktických předmětů, které při výuce hojně využíváme. Prozatím se učíme v&nbspmenších skupinkách, dvojice, čtveřice, maximálně šestice. Pokud se přihlásíš se svou vlastní partičkou (min 4 lidé), můžeš získat slevu. Pokud máte vlastní vhodné prostory, kde by naše lekce mohly probíhat, dá se na tom také domluvit <i class="em em-wink" aria-role="presentation" aria-label="WINKING FACE"></i> </br></br>
                            Pokud by sis radši připlatil a měl individuální hodinu, též s tím není problém. Také varianta online výuky je možná.
                            Zkrátka, na všem se dá domluvit, aneb
                            When there is a will there is a way.
                            (Když je vůle, je i cesta (způsob jak to udělat).
                            Tak už neotálej, a&nbsppojď do toho!
                            </p>
                        <h4 class="d-flex justify-content-center mt-4 darkred">Cheers!</h4>
                        <h4 class="d-flex justify-content-center mt-4 darkred"> Moni and the Talking Sheep</h4>
                        <div class="d-flex justify-content-center">
                            <img src="{{ url('images/sheepka.png')}}" alt="english" style="height:100px; width:100px"/>
                        </div>
                    </div>                         
                </div>
            </div>
        </div>
    </section>
    <!-- Pricelist section -->
    <section id="pricelist">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div>
                <h2 class="d-flex justify-content-center mb-5">Ceník</h2>
                <p class="text-center font-weight-bold" style="font-size: 1.2rem">
                    Dobře mi fungují malý skupinky, např čtveřice. Do nějaký tě přihodím za 200 Kč/60 min.<br><br>
                    Učím i menší kroužky, které se vytváří operativně dle zájmu, když je dost zájemců, nemám problém otevřít kroužek třeba v Kotěhůlkách pod bukem. <br><br>
                    <strong>Rozmezí Pardubicko, Chrudimsko, Hlinecko a Vysokomýtsko.</strong><br><br>
                    Individualismus nelítostně trestám cenou 400 Kč/60 min.  ;)<br><br>
                    Přihlásíš se s několika kámoši? Slevy! Ukázková hodina z<strong class="darkred">DAR</strong>ma :)<br><br>
                    Zajímá tě víc? Neváhej mě <a class="darkred" href="#contact">kontaktovat</a>!
                </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card box-shad cardcontacts py-4 h-100">
                        <div class="card-body text-center">
                            <h2 class="text-uppercase m-0">navštiv náš</h2>
                            <hr class="my-4" />
                            <div><img class="mr-3 shadow" src="images/fb.jpg" alt="fb" style="height: 30px; width: 30px"><a href="https://www.facebook.com/talking.sheep.english/" target="_blank" class="contactemail">facebook</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card box-shad cardcontacts py-4 h-100">
                        <div class="card-body text-center">
                            <h2 class="text-uppercase m-0">e-mail</h2>
                            <hr class="my-4" />
                            <div><a class="contactemail" href="#!">talking.sheep.english@gmail.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card box-shad cardcontacts py-4 h-100">
                        <div class="card-body text-center">
                            <h2 class="text-uppercase m-0">Telefon</h2>
                            <hr class="my-4" />
                            <div class="contactfont">(+420) 728 648 959</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
@endsection
