@extends('layout.base')

@section('content')
    <div id="titre-accueil" class="mb-4 p-3">
        <h1 class="text-4xl font-bold">Bienvenue sur mon portfolio</h1>
        <p class="mt-2">Sur cette page vous pourrez voir mon CV fait en HTML/CSS/JS <br> Bonne visite à vous et à bientot</p>

        <x-btn type="success" valeur="Compétences" id="toto"></x-btn>
    </div>
    <div id="cv-accueil" class="p-3 ld:flex flex flex-wrap content-start">
        {{-- ZONE DE GAUCHE  --}}
        @include('accueil.zone-gauche-cv')
        {{-- ZONE DE DROITE  --}}
        @include('accueil.zone-droit-cv')
    </div>
@endsection
