<a href="{{route('competences')}}"><button class="
    {{$couleur}}
    @isset($hauteur)
        {{$hauteur}}
    @endisset
    {{$largeur}}
    rounded
    text-white
    shadow
    break-all
    hover:{{$hover_couleur}}"
    @isset($checkSubmitBtn)
        type="submit"
    @endisset
    @isset($id)
        id="{{$id}}"
    @endisset
>
    {{$valeur}}
</button>
</a>