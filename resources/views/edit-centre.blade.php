@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="productos" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Editar Centre amb ID {{request()->route()->parameters()['id_centre']}}</h1>
            <hr/>
            <div class="container">
                <h3>Edita les dades del centre:</h3>
                <div class="d-flex flex-row">
                    <form method="POST" action="{{route('centres/edit/post', ['id_centre' => request()->route()->parameters()['id_centre']])}}">
                        {{ csrf_field() }}
                        <div class="editForm d-flex flex-column">
                            <div>
                                <label class="customLabel" for="nom">Nom:</label>
                                <input class="customInput" type="text" name="nom" id="nom" value="{{$response['nom']}}" required placeholder="Introdueix el nom" />
                            </div>
                            <div>
                                <label class="customLabel" for="direccio">Direcció:</label>
                                <input class="customInput" type="text" name="direccio" id="direccio" value="{{$response['direccio']}}" required placeholder="Introdueix la direcció" />
                            </div>
                            <div>
                                <label class="customLabel" for="poblacio">Població:</label>
                                <input class="customInput" type="text" name="poblacio" id="poblacio" value="{{$response['poblacio']}}" required placeholder="Introdueix la població" />
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
