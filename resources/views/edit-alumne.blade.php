@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="productos" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Editar Alumne amb ID {{request()->route()->parameters()['id_alumne']}}</h1>
            <hr/>
            <div class="container">
                    <h3>Edita les dades de l'alumne:</h3>
                    <div class="d-flex flex-row">
                        <form method="POST" action="{{route('alumnes/edit/post', ['id_alumne' => request()->route()->parameters()['id_alumne']])}}">
                            {{ csrf_field() }}
                            <div class="editForm d-flex flex-column">
                                <div>
                                    <label class="customLabel" for="nom">Nom:</label>
                                    <input class="customInput" type="text" name="nom" id="nom" value="{{$response['nom']}}" required placeholder="Introdueix el nom" />
                                </div>
                                <div>
                                    <label class="customLabel" for="cognoms">Cognoms:</label>
                                    <input class="customInput" type="text" name="cognoms" id="cognoms" value="{{$response['cognoms']}}" required placeholder="Introdueix els cognoms" />
                                </div>
                                <div>
                                    <label class="customLabel d-block float-left mr-1">Data de naixement:</label>
                                    <input class="customInput" type="date" name="data_naixement" id="data_naixement" value="{{date('Y-m-d', strtotime($response['data_naixement']))}}" required placeholder="Introdueix la data de naixement" />
                                </div>
                                <div>
                                    <label class="customLabel" for="centre_id">ID Centre:</label>
                                    <input class="customInput" type="text" name="centre_id" id="centre_id" value="{{$response['centre_id']}}" required placeholder="Introdueix l'ID del centre" />
                                </div>
                                <div>
                                    <label class="customLabel" for="ensenyament_id">ID Ensenyament:</label>
                                    <input class="customInput" type="text" name="ensenyament_id" id="ensenyament_id" value="{{$response['ensenyament_id']}}" required placeholder="Introdueix l'ID de l'ensenyament" />
                                </div>
                            </div>
                            <br><input class="customSubmitFiltro btn btn-primary" type="submit" value="Editar"/>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
