<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/c0611503dd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset("css/accueil.css")}}">
    @yield('css_head')
    @yield('js_head')
</head>
<body class="bg-gray-200">
    <input id='token' type="hidden" value="{{csrf_token()}}">
    <div class="w-full h-[800px] flex gap-[5px] mt-2">
        <div class="lg:w-1/6 lg:block hidden flex">
            @yield('sidebar')
        </div>
        <div class="lg:w-5/6 flex lg:items-start lg:flex-row flex-col  gap-0.5 w-full">
            @include('flash.flash-message')
            @yield('crud')
        </div>

    </div>
    <footer>
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous">
        </script>
        <script src={{asset('js/flash/flash.js')}}></script>
        @yield('css_footer')
        @yield('js_footer')
    </footer>

</body>
</html>
