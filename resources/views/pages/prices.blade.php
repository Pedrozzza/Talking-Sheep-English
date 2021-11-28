@extends('layouts.app')

@section('content')
<section id="pricelist">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col">
                    <h2 class="d-flex justify-content-center mb-5" style="align-items:center"><i class="fas fa-coins mr-4 d-none d-sm-block"></i>Ceník</h2>
                    <div class="row">
                        <div class="col-md-6 offset-md-3" style="overflow-x:auto">
                            <table class="mb-5 price-text table borderless border-style">
                                <tr>
                                    <td>Individuální výuka</td>    
                                    <td>400 Kč / 60 minut</td>
                                </tr>
                                <tr>
                                    <td>Skupinová výuka</td>    
                                    <td>200 Kč / 60 minut</td>                                    
                                </tr>
                            </table>
                                                    </div>
                    </div>
                    <p class="price-text mb-5">
                        <strong>Individuální výuka</strong> přináší čas jen pro tebe. <strong>Skupinová výuka</strong> je fajn pro potkávání dalších studentů
                        a prostřídání parťáků se kterými během lekce mluvíš. Volba je jen na tobě.
                    </p>
                    
                    <div class="row">
                        <div class="col-md-6 offset-md-3" style="overflow-x:auto">
                            <p class="price-text" style="font-size:14px">Orientační slevy při předplacení (výpočet se liší dle týdnů v měsíci):</p>
                            <table class="mb-5 price-text2 table border-style" >
                                <tr style="padding:0 !important; vertical-align:center !important">
                                    <th class="price-th">Týdenní sazba dle lekcí</th>
                                    <th class="price-th">1 měsíc</th>
                                    <th class="price-th">3 měsíce</th>
                                    <th class="price-th">6 měsíců</th>
                                    <!-- <th class="price-th">9 měsíců</th> -->
                                </tr>
                                <tr style="background-color:#d3d1d1; padding:0 !important; vertical-align:center !important">
                                    <td>400 Kč / týden</td>    
                                    <td>1 600 Kč</td>
                                    <td>4 800 Kč</td>    
                                    <td>9 600 Kč</td>
                                    <!-- <td>14400 Kč</td> -->
                                </tr>
                                <tr style="background-color:#b2a3a3d9; padding:0 !important; vertical-align:center !important">
                                    <td>Sleva</td>    
                                    <td></td>
                                    <td>- 200 Kč</td>    
                                    <td>- 600 Kč</td>
                                    <!-- <td>- 1100 Kč</td> -->
                                </tr>
                                <tr style="background-color:#a3c2fa; padding:0 !important; vertical-align:center !important">
                                    <td>800 Kč / týden</td>    
                                    <td>3 200 Kč</td>
                                    <td>9 600 Kč</td>    
                                    <td>19 200 Kč</td>
                                    <!-- <td>28800 Kč</td> -->
                                </tr>
                                <tr style="background-color:#517efe; padding:0 !important; vertical-align:center !important">
                                    <td>Sleva</td>    
                                    <td></td>
                                    <td>- 400 Kč</td>    
                                    <td>- 1 100 Kč</td>
                                    <!-- <td>- 1800 Kč</td> -->
                                </tr>
                            </table>
                            <p class="price-text">Ceník úvodních víkendových kurzů</p>
                            <table class="mb-5 price-text table borderless border-style">
                                <tr>
                                    <td>English víkend v Podkrkonoší</td>    
                                    <td>2900 Kč</td>                                     
                                </tr>
                                <tr>
                                    <td>English víkend v Chrudimi</td>    
                                    <td>1900 Kč</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection