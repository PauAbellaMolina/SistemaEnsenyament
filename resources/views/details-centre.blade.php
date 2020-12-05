@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="productos" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Detalls del Centre amb ID {{request()->route()->parameters()['id_centre']}}</h1>
            <hr/>
            <div class="container">
                <div class="d-flex flex-row justify-content-between">
                    <div class="d-flex flex-column mr-5 mt-2">
                        <h3><strong>Nom:</strong></h3>
                        <h4>{{$response[0]['nom']}}</h4>

                        <h3 class="mt-3"><strong>Direcció:</strong></h3>
                        <h4>{{$response[0]['direccio']}}</h4>

                        <h3 class="mt-3"><strong>Població:</strong></h3>
                        <h4>{{$response[0]['poblacio']}}</h4>

                        <h3 class="mt-4"><a class="coloured customLink" href="{{route('centres/edit', ['id_centre' => $response[0]['id']])}}">Editar centre</a></h3>
                    </div>
                </div>
                <div class="mt-5 col-md-12">
                    <h3><strong>Alumnes del {{$response[0]['nom']}}:</strong></h3>
                    <div class="card-header d-flex flex-row font-weight-bolder coloured mt-3">
                        <p class="idCol col-auto">ID</p>
                        <p class="col-md-2">Nom</p>
                        <p class="col-md-4">Cognoms</p>
                        <p class="col-md-3">Data naixement</p>
                        <p class="col-md-2 ml-3">Accions</p>
                    </div>

                    @foreach ($response[0]['alumnes'] as $alumne)
                        <div id="app"><alumne-centre-component v-bind:alumne="{{ json_encode($alumne) }}"></alumne-centre-component></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
