@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="productos" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Detalls de l'Ensenyament amb ID {{request()->route()->parameters()['id_ensenyament']}}</h1>
            <hr/>
            <div class="container">
                <div class="d-flex flex-row justify-content-between">
                    <div class="d-flex flex-column mr-5 mt-2">
                        <h3><strong>Nom:</strong></h3>
                        <h4>{{$response[0]['nom']}}</h4>

                        <h3 class="mt-3"><strong>Descripció:</strong></h3>
                        <h4>{{$response[0]['descripcio']}}</h4>

                        <h3 class="mt-4"><a class="coloured customLink" href="{{route('ensenyaments/edit', ['id_ensenyament' => $response[0]['id']])}}">Editar ensenyament</a></h3>
                    </div>
                </div>
                <div class="mt-5 col-md-12">
                    <h3><strong>Alumnes matriculats a {{$response[0]['nom']}}:</strong></h3>
                    <div class="card-header d-flex flex-row font-weight-bolder coloured mt-3">
                        <p class="idCol col-auto">ID</p>
                        <p class="col-md-2">Nom</p>
                        <p class="col-md-4">Cognoms</p>
                        <p class="col-md-3">Data naixement</p>
                        <p class="col-md-2 ml-3">Accions</p>
                    </div>

                    @foreach ($response[0]['alumnes'] as $alumne)
                        <div id="app"><alumne-embed-component v-bind:alumne="{{ json_encode($alumne) }}"></alumne-embed-component></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
