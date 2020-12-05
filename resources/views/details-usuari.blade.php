@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="usuarios" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Detalls de l'Usuari amb ID {{request()->route()->parameters()['id_user']}}</h1>
            <hr/>
            <div class="d-flex flex-row">
                <img class="imgPerfil" src="{{$response['url_foto']}}" />
                <div class="d-flex flex-column mt-3 ml-4">
                    <h2 title="¡Mira mama, soc jo!">{{$response['nom']}} {{$response['cognoms']}}</h2>
                    <h4 class="mb-4">{{$response['email']}}</h4>
                    <h4 class="mb-4">{{$response['data_naixement']}}</h4>
                    <h5><a class="coloured customLink" href="{{route('usuaris/edit', ['id_user' => request()->route()->parameters()['id_user']])}}">Editar la informació</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
