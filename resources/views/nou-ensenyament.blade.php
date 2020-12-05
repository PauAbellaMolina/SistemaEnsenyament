@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="usuarios" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Nou Ensenyament</h1>
            <hr/>
            <div class="container">
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3>Introdueix les dades del nou ensenyament:</h3>
                        <form method="POST" action="{{route('ensenyaments/nou/post')}}">
                            {{ csrf_field() }}
                            <div class="editForm d-flex flex-column">
                                <div>
                                    <label class="customLabel" for="nom">Nom:</label>
                                    <input class="customInput" type="text" name="nom" id="nom" value="" required placeholder="Introdueix el nom" />
                                </div>
                                <div>
                                    <label class="customLabel" for="descripcio">Descripció:</label>
                                    <textarea class="customInput align-top" type="text" name="descripcio" id="descripcio" value="" required placeholder="Introdueix la descripció"></textarea>
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
