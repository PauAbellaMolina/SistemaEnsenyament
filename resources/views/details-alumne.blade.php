@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="element" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Detalls de l'Alumne amb ID {{request()->route()->parameters()['id_alumne']}}</h1>
            <hr/>
            <div class="container">
                <div class="d-flex flex-row justify-content-between">
                    <div class="d-flex flex-column mr-5 mt-2">
                        <h3><strong>Nom:</strong></h3>
                        <h4>{{$response['nom']}}</h4>

                        <h3 class="mt-3"><strong>Cognoms:</strong></h3>
                        <h4>{{$response['cognoms']}}</h4>

                        <h3 class="mt-3"><strong>Data naixement:</strong></h3>
                        <h4>{{$response['data_naixement']}}</h4>

                        <h3 class="mt-3"><strong>Centre:</strong></h3>
                        <h4>{{$response['centre']['nom']}}</h4>
                        <h4>{{$response['centre']['direccio']}}</h4>
                        <h4>{{$response['centre']['poblacio']}}</h4>
                        <a class="customLink mt-1" title="Detalls del centre" :href="{{route('centres/details', ['centre_id' => $response['centre']['id']])}}">Detalls</a>

                        <h3 class="mt-3"><strong>Ensenyament:</strong></h3>
                        <h4>ID {{$response['ensenyament']['id']}}</h4>
                        <h4>{{$response['ensenyament']['nom']}}</h4>
                        <h5 class="text-justify">{{$response['ensenyament']['descripcio']}}</h5>
                        <a class="customLink mt-1" title="Detalls de l'ensenyament" :href="{{route('ensenyaments/details', ['ensenyament_id' => $response['ensenyament']['id']])}}">Detalls</a>

                        <h3 class="mt-4"><a class="coloured customLink" href="{{route('alumnes/edit', ['id_alumne' => $response['id']])}}">Editar alumne</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
