<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Jazyková škola angličtina Chrudim. Efektivní výuka angličtiny."/>
    <meta name="keywords" content="angličtina,škola,jazyková,Chrudim,angličtina-výuka,efektivní">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- favicon -->
    @include('inc.favicon')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Emoji -->
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
    </style>

</head>
    <body>
            @include('inc.navbar')
                <div class="container" style="margin-top: 56px">
                    
                </div>
                @yield('content')
              
            @include('inc.footer')
    <!-- Scripts -->
    <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fab7dbd1c2bb68f"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $('#select-all').click(function(event) {   
        if(this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = true;                        
            });
        } else {
            $(':checkbox').each(function() {
                this.checked = false;                       
            });
        }
    });
    </script>
    <script>

        const cookieContainer = document.querySelector(".cookie");
        const cookieButton = document.querySelector(".btn-cookie")

        cookieButton.addEventListener("click", () => {
            cookieContainer.classList.remove("active");
            localStorage.setItem("cookieBannerDisplayed", "true")
        });

        setTimeout( () => {
            if (!localStorage.getItem("cookieBannerDisplayed")){
                cookieContainer.classList.add("active");
            }
        }, 2000)


        
    </script>

    </body>
</html>
