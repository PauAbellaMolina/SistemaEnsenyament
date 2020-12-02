@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Bienvenido!</h1>
            <hr/>
            <div class="d-flex flex-row">
                <img class="imgPerfil" src="{{ $userInfo[4] }}" />
                <div class="d-flex flex-column mt-3 ml-4">
                    <h2 title="¡Mira mamá, soy yo!">{{ $userInfo[1] }} {{ $userInfo[2] }}</h2>
                    <h4 class="mb-4">{{ $userInfo[3] }}</h4>
                    <h5><a class="coloured customLink" href="{{route('usuarios/edit', ['id_user' => $userInfo[0]])}}">Editar mi información</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
