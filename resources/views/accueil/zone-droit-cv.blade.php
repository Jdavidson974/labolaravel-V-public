<div class="lg:flex lg:w-2/6 flex flex-wrap w-full p-3 content-start hidden shadow-2xl bg-white" id="cv-droit">
    {{-- RENSEIGNEMENTS  --}}
    <div class="w-full flex flex-wrap content-start font-bold p-3 vert text-white">
        <h2 class="text-1xl font-bold">RENSEIGNEMENTS</h2>
        {{-- MAIL --}}
        <div class="w-full flex p-3">
            {{-- ICONE --}}
            <div class="w-1/12 flex"><i class="fa-solid fa-envelope m-auto"></i></div>
            {{-- LIBELLÉ --}}
            <div class="w-11/12">
                <span class="ml-2">{{$informations->mail}}</span>
            </div>
        </div>
        {{-- ADRESSE --}}
        <div class="w-full flex p-3">
            {{-- ICONE --}}
            <div class="w-1/12 flex"><i class="fa-solid fa-location-dot m-auto"></i></div>
            {{-- LIBELLÉ --}}
            <div class="w-11/12">
                <p class="ml-2">{{$informations->adresse}}</p>
            </div>
        </div>
        {{-- AGE --}}
        <div class="w-full flex p-3">
            {{-- ICONE --}}
            <div class="w-1/12 flex"><i class="fa-solid fa-calendar-days m-auto"></i></div>
            {{-- LIBELLÉ --}}
            <div class="w-11/12">
                <span class="ml-2">{{$age}} ans</span>
            </div>
        </div>
        {{-- PERMIS --}}
        <div class="w-full flex p-3">
            {{-- ICONE --}}
            <div class="w-1/12 flex"><i class="fa-solid fa-id-card m-auto"></i></div>
            {{-- LIBELLÉ --}}
            <div class="w-11/12">
                @if ($informations->permis)
                    <span class="ml-2">Permis B acquis</span>
                @else
                    <span class="ml-2">Pas de permis</span>
                @endif

            </div>
        </div>
        {{-- VEHICULE --}}
        <div class="w-full flex p-3">
            {{-- ICONE --}}
            <div class="w-1/12 flex"><i class="fa-solid fa-car m-auto"></i></div>
            {{-- LIBELLÉ --}}
            <div class="w-11/12">
                @if ($informations->vehicule)
                    <span class="ml-2">Véhiculé</span>
                @else
                    <span class="ml-2">Pas de Véhicule</span>
                @endif
            </div>
        </div>
        {{-- ZONE --}}
        <div class="w-full flex p-3">
            {{-- ICONE --}}
            <div class="w-1/12 flex"><i class="fa-solid fa-location-arrow m-auto"></i></div>
            {{-- LIBELLÉ --}}
            <div class="w-11/12">
                <span class="ml-2">{{$informations->distance}}</span>
            </div>
        </div>
        {{-- TEL --}}
        <div class="w-full flex p-3">
            {{-- ICONE --}}
            <div class="w-1/12 flex"><i class="fa-solid fa-mobile-screen m-auto"></i></div>
            {{-- LIBELLÉ --}}
            <div class="w-11/12">
                <span class="ml-2">{{$informations->tel}}</span>
            </div>
        </div>


    </div>
    {{-- COMPÉTENCES --}}
    <div class="w-full flex flex-wrap content-start font-bold bg-white  p-3">
        <h2 class="text-1xl t-vert">COMPÉTENCES</h2>
        {{-- ITEM --}}
        @forelse ( $competences as $competence)
            <div class="w-full flex italic p-3">
                <span>{{$competence->nom_competence}}</span>
            </div>
        @empty
            <div class="w-full flex italic p-3">
                <span>Pas de competences pour ce CV</span>
            </div>
        @endforelse
    </div>
    {{-- ATOUTS --}}
    <div class="w-full flex flex-wrap content-start font-bold vert text-white p-3">
        <h2 class="text-1xl">ATOUTS</h2>
        @forelse ($atouts as $atout )
            <div class="w-full flex italic p-3">
                <span>{{$atout->atouts}}</span>
            </div>
        @empty
        <div class="w-full flex italic p-3">
            <span>Pas d'atouts pour ce Cv</span>
        </div>
        @endforelse
    </div>
    {{-- LANGUES  --}}
    <div class="w-full flex flex-wrap content-start font-bold bg-white p-3">
        <h2 class="text-1xl t-vert">LANGUES</h2>
        {{-- ITEM --}}
        @forelse ($langues as $langue )
            <div class="w-full flex italic p-3">
                <span>{{$langue->langue}}</span>
            </div>
        @empty
            <div class="w-full flex italic p-3">
                <span>Pas de langues pour ce CV</span>
            </div>
        @endforelse
    </div>
    {{-- CENTRES D'INTERÊTS --}}
    <div class="w-full flex flex-wrap content-start font-bold vert text-white p-3">
        <h2 class="text-1xl">CENTRES D'INTERÊTS</h2>
        @forelse ($interets as $interet )
            <div class="w-full flex italic p-3">
                <span>{{$interet->interets }}</span>
            </div>
        @empty
            <div class="w-full flex italic p-3">
                <span>Pas de centres d'interets pour ce CV</span>
            </div>
        @endforelse
    </div>
</div>
