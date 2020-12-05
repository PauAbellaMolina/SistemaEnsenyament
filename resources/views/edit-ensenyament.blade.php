@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="productos" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Editar l'Ensenyament amb ID {{request()->route()->parameters()['id_ensenyament']}}</h1>
            <hr/>
            <div class="container">
                <h3>Edita les dades l'ensenyament:</h3>
                <div class="d-flex flex-row">
                    <form method="POST" action="{{route('ensenyaments/edit/post', ['id_ensenyament' => request()->route()->parameters()['id_ensenyament']])}}">
                        {{ csrf_field() }}
                        <div class="editForm d-flex flex-column">
                            <div>
                                <label class="customLabel" for="nom">Nom:</label>
                                <input class="customInput" type="text" name="nom" id="nom" value="{{$response['nom']}}" required placeholder="Introdueix el nom" />
                            </div>
                            <div>
                                <label class="customLabel" for="descripcio">Descripció:</label>
                                <textarea class="customInput align-top" type="text" name="descripcio" id="descripcio" value="" required placeholder="Introdueix la descripció">{{$response['descripcio']}}</textarea>
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
