
<nav class="relative flex flex-wrap items-center justify-between px-2 py-3 bg-gray-500 mb-3 ">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto  px-4 lg:static lg:block lg:justify-start">
        <a class="hover:opacity-75 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white flex" href="{{route('accueil')}}">
            <img class="w-16 " src="{{URL::asset('/img/kisspng-snowflake-pattern-symmetry-line-art-devike-design-png-karácsony-tél-ii-5b65a5a717df77.9079807115333881990978.png')}}" alt="">
            <span class="sm:m-auto sm:ml-1 sm:block hidden">SAUTRON Jean Davidson Portfolio </span>
        </a>
        <button class="text-white cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
            <i class="fas fa-bars"></i>
        </button>
        </div>
        <div class="lg:flex flex-grow items-center hidden" id="example-collapse-navbar">
            <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                <li class="nav-item">
                    <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#pablo">
                        <i class="fab fa-facebook-square text-lg leading-lg text-white opacity-75"></i><span class="ml-2">Mon profil</span>
                    </a>
                </li>
                <li class="nav-item" id="menu">
                    <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#" onclick="openDropdown(event,'dropdown-id')">
                       <i class="fab fa-twitter text-lg leading-lg text-white opacity-75 mr-2"></i>Mes travaux <i id="down-up" class="fab fa-solid fa-angle-down text-lg leading-lg text-white opacity-75 ml-2"></i>
                    </a>
                    <div class="hidden bg-white  text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1" style="min-width:12rem" id="dropdown-id">
                        <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-slate-700 hover:bg-gray-400">
                          Framework PHP
                        </a>
                        <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-slate-700 hover:bg-gray-400">
                          MCD/MPD
                        </a>
                        <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-slate-700 hover:bg-gray-400">
                          Autre
                        </a>
                        {{-- SEPARATE LINK  --}}
                        {{-- <div class="h-0 my-2 border border-solid border-t-0 border-slate-800 opacity-25"></div>
                        <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-slate-700 hover:bg-gray-400">
                          Seprated link
                        </a> --}}
                    </div>
                </li>
                <li class="nav-item">
                    <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#pablo">
                        <i class="fa-solid fa-download text-lg leading-lg text-white opacity-75"></i><span class="ml-2">Télécharger mon cv en PDF </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@section('js_footer')
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('js/accueil/accueil.js')}}"></script>
@endsection
