@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="usuarios" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Nou Alumne</h1>
            <hr/>
            <div class="container">
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3>Introdueix les dades del nou alumne:</h3>
                        <form method="POST" action="{{route('alumnes/nou/post')}}">
                            {{ csrf_field() }}
                            <div class="editForm d-flex flex-column">
                                <div>
                                    <label class="customLabel" for="nom">Nom:</label>
                                    <input class="customInput" type="text" name="nom" id="nom" value="" required placeholder="Introdueix el nom" />
                                </div>
                                <div>
                                    <label class="customLabel" for="cognoms">Cognoms:</label>
                                    <input class="customInput" type="text" name="cognoms" id="cognoms" value="" required placeholder="Introdueix els cognoms" />
                                </div>
                                <div>
                                    <label class="customLabel" for="data_naixement">Data de naixement:</label>
                                    <input class="customInput" type="date" name="data_naixement" id="data_naixement" value="" required placeholder="Introdueix la data de naixement" />
                                </div>
                                <div>
                                    <label class="customLabel" for="nombre">ID Centre:</label>
                                    <input class="customInput" type="text" name="centre_id" id="centre_id" value="" required placeholder="Introdueix l'ID del centre" />
                                </div>
                                <div>
                                    <label class="customLabel" for="nombre">ID Ensenyament:</label>
                                    <input class="customInput" type="text" name="ensenyament_id" id="ensenyament_id" value="" required placeholder="Introdueix l'ID de l'ensenyament" />
                                </div>
                            </div>
                            <br><input class="customSubmitFiltro btn btn-primary" type="submit" value="Crear"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
