{{-- ZONE DE GAUCHE  --}}
<div class="lg:flex lg:flex-wrap lg:w-4/6 lg:content-start flex flex-wrap w-full bg-white shadow-2xl" id="cv-gauche">
    {{-- TITRE ET METIER  --}}
    <div id="titre-metier" class="w-full  p-3">
        <h2 class="text-3xl font-bold">SAUTRON Jean Davidson</h2>
        <h3 class="text-2xl font-bold">{{$titre_cv}}</h3>
    </div>
    {{-- RENSEIGNEMENTS RESPONSIVE --}}
    <div class="w-full flex flex-wrap content-start font-bold p-3 vert text-white lg:hidden">
        <h4 class="text-1xl font-bold w-full">Renseignements</h4>
        {{-- MAIL --}}
        <div class="sm:w-1/2 w-full flex p-3">
            {{-- ICONE --}}
            <div class="w-1/12 flex"><i class="fa-solid fa-envelope m-auto"></i></div>
            {{-- LIBELLÉ --}}
            <div class="w-11/12 flex items-center">
                <span class="ml-2">{{$informations->mail}}</span>
            </div>
        </div>
       {{-- ADRESSE --}}
       <div class="sm:w-1/2 w-full flex p-3">
            {{-- ICONE --}}
            <div class="w-1/12 flex"><i class="fa-solid fa-location-dot m-auto"></i></div>
            {{-- LIBELLÉ --}}
            <div class="w-11/12 flex items-center">
                <span class="ml-2">{{$informations->adresse}}</span>
            </div>
        </div>
        {{-- AGE --}}
        <div class="sm:w-1/2 w-full flex p-3">
            {{-- ICONE --}}
            <div class="w-1/12 flex"><i class="fa-solid fa-calendar-days m-auto"></i></div>
            {{-- LIBELLÉ --}}
            <div class="w-11/12 flex items-center">
                <span class="ml-2">{{$age}} ans</span>
            </div>
        </div>
        {{-- PERMIS --}}
        <div class="sm:w-1/2 w-full flex p-3">
            {{-- ICONE --}}
            <div class="w-1/12 flex"><i class="fa-solid fa-id-card m-auto"></i></div>
            {{-- LIBELLÉ --}}
            <div class="w-11/12 flex items-center">
                @if ($informations->permis)
                    <span class="ml-2">Permis B acquis</span>
                @else
                    <span class="ml-2">Pas de permis</span>
                @endif
            </div>
        </div>
        {{-- VEHICULE --}}
        <div class="sm:w-1/2 w-full flex p-3">
            {{-- ICONE --}}
            <div class="w-1/12 flex"><i class="fa-solid fa-car m-auto"></i></div>
            {{-- LIBELLÉ --}}
            <div class="w-11/12 flex items-center">
                @if ($informations->vehicule)
                    <span class="ml-2">Véhiculé</span>
                @else
                    <span class="ml-2">Pas de Véhicule</span>
                @endif

            </div>
        </div>
        {{-- ZONE --}}
        <div class="sm:w-1/2 w-full flex p-3">
            {{-- ICONE --}}
            <div class="w-1/12 flex"><i class="fa-solid fa-location-arrow m-auto"></i></div>
            {{-- LIBELLÉ --}}
            <div class="w-11/12 flex items-center">
                <span class="ml-2">{{$informations->distance}}</span>
            </div>
        </div>
        {{-- TEL --}}
        <div class="sm:w-1/2 w-full flex p-3">
            {{-- ICONE --}}
            <div class="w-1/12 flex"><i class="fa-solid fa-mobile-screen m-auto"></i></div>
            {{-- LIBELLÉ --}}
            <div class="w-11/12 flex items-center">
                <span class="ml-2">{{$informations->tel}}</span>
            </div>
        </div>
    </div>
    {{-- CITATION  --}}
    <div id="citation" class="w-full p-3 ">
        <div class="w-full bg-gray-200 p-3">
            <p class="italic font-semibold text-lg text-gray-500">
                {{$citation}}
            </p>
        </div>
    </div>
    {{-- COMPÉTENCES --}}
    <div class="lg:hidden w-full">
        <div class="w-full flex flex-wrap content-start font-bold bg-white p-3">
            <h2 class="text-1xl font-bold w-full">Compétences</h2>
            {{-- SEPARATOR  --}}
            <div class="vert w-full h-0.5"></div>
            {{-- ITEM --}}
            @forelse ( $competences as $competence)
                <div class="w-1/2 italic flex p-3">
                    <span>{{$competence->nom_competence}}</span>
                </div>
            @empty
                <div class="w-full italic flex p-3">
                    <span>Pas de competences pour ce CV</span>
                </div>
            @endforelse
        </div>
    </div>
    {{-- DIPLOMES ET FORMATIONS  --}}
    <div id="diplome-formation" class="w-full p-3 flex flex-wrap content-start">
        <h4 class="text-1xl font-bold w-full">Diplômes et Formations</h4>
        {{-- SEPARATOR  --}}
        <div class="vert w-full h-0.5"></div>
        {{-- ITEM  --}}
        @forelse ($diplomes_formations as $diplome_formation )
            <div class="w-full p-3 flex">
                {{-- DATE  --}}
                <div class=" flex items-center md:w-1/8  w-1/8 text-center">
                    <p class="rounded-full vert  text-xs p-3 text-white"> Du <br> {!! date('d/m/Y', strtotime($diplome_formation->date_debut_diplome_formation)) !!}<br> Au <br>{!! date('d/m/Y', strtotime($diplome_formation->date_fin_diplome_formation)) !!}</p>
                </div>
                {{-- DIPLOME/FOMATION  --}}
                <div class="flex items-center md:w-7/8 w-7/8 flex m-auto ml-2 p-3">
                    <p> <span class="font-bold"> {{$diplome_formation->diplome_formation}} </span> / <span class="font-bold"> {{$diplome_formation->organisme}}  </span> {{$diplome_formation->ville}}, {{$diplome_formation->pays}}</p>
                </div>
            </div>
        @empty
            {{-- CAS OU IL N'Y A PAS DE RESULTAT LORS DE LA REQUETTE POUR LES FORMATIONS/DIPLOMES --}}
            <div class="w-full p-3 flex">
                <p> <span class="font-bold italic"> Aucun diplome ou formation disponible pour ce Cv </span></p>
            </div>
        @endforelse
    </div>
    {{-- EXPERIENCES PRO  --}}
    <div id="diplome-formation" class="w-full p-3 flex flex-wrap content-start">
        <h4 class="text-1xl font-bold w-full">Expériences professionnels</h4>
        {{-- SEPARATOR  --}}
        <div class="vert w-full h-0.5"></div>
        {{-- ITEM  --}}
        @forelse ($experiences as $experience )
            <div class="w-full p-3 flex">
                {{-- DATE  --}}
                <div class="flex items-center md:w-1/8  w-1/8 text-center">
                    <p class="rounded-full vert  text-xs p-3 text-white"> Du <br> {!! date('d/m/Y', strtotime($experience->date_debut_exp )) !!} <br> Au <br>{!! date('d/m/Y', strtotime($experience->date_fin_exp )) !!}</p>
                </div>
                {{-- EXPERIENCES  --}}
                <div class=" md:w-7/8 w-7/8 flex m-auto ml-2 p-3">
                    <p> <span class="font-bold"> {{$experience->experience }} </span> / <span class="font-bold"> {{$experience->entreprise }}   </span> {{$experience->ville }}, {{$experience->pays }} <br>
                        {!! html_entity_decode($experience->description) !!}
                    </p>
                </div>
            </div>
        @empty
            <div class=" w-full flex m-auto ml-2 p-3">
                <p>Pas d'experience pour ce CV</p>
            </div>
        @endforelse
    </div>
    <div class="lg:hidden w-full ">
        {{-- ATOUTS --}}
        <div class="w-full flex flex-wrap content-start font-bold justify-center p-3">
            <h2 class="text-1xl text-center">ATOUTS</h2>
            <div class="vert w-full h-0.5"></div>
            {{-- ITEM --}}
            @forelse ($atouts as $atout )
                <div class="w-full flex justify-center italic p-3">
                    <span> {{$atout->atouts}} </span>
                </div>
            @empty
            <div class="w-full flex justify-center italic p-3">
                <span>Pas d'atouts pour ce Cv</span>
            </div>
            @endforelse
        </div>
        {{-- LANGUES  --}}
        <div class="w-full flex flex-wrap content-start font-bold bg-white justify-center p-3">
            <h2 class="text-1xl ">LANGUES</h2>
            {{-- SEPARATOR  --}}
            <div class="vert w-full h-0.5"></div>
            {{-- ITEM --}}
            @forelse ($langues as $langue )
                <div class="w-full flex italic justify-center p-3">
                    <span>{{$langue->langue}}</span>
                </div>
            @empty
                <div class="w-full flex italic justify-center p-3">
                    <span>Pas de langues pour ce CV</span>
                </div>
            @endforelse
        </div>
        {{-- CENTRES D'INTERÊTS --}}
        <div class="w-full flex flex-wrap content-start font-bold justify-center p-3">
            <h2 class="text-1xl text-center ">CENTRES D'INTERÊTS</h2>
            {{-- SEPARATOR  --}}
            <div class="vert w-full h-0.5"></div>
            {{-- ITEM --}}
            @forelse ($interets as $interet )
                <div class="w-full flex italic justify-center p-3">
                    <span>{{$interet->interets}}</span>
                </div>
            @empty
                <div class="w-full italic flex justify-center p-3">
                    <span>Pas de centres d'interets pour ce CV</span>
                </div>
            @endforelse
        </div>
    </div>
</div>
