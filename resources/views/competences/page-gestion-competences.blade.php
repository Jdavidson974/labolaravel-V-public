@extends('layout.base-crud')
@section('sidebar')
    @include('layout.sidebar')
@endsection
@section('crud')
    <div class="w-full flex flex-row">
        <div class="w-full flex lg:items-start lg:flex-row flex-col  gap-0.5">
            @include('competences.create-competences')
            @include('competences.show-competences')
            @include('modal.modal-delete')
        </div>
    </div>


@endsection
@section('js_footer')
    <script src="{{asset('js/competences/competence.js')}}"></script>
@endsection
