@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="usuarios" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Editar l'Usuari amb ID {{request()->route()->parameters()['id_user']}}</h1>
            <hr/>
            <div class="container">
                <h3 class="coloured">Edita les dades de l'usuari:</h3>
                <div class="d-flex flex-row">
                    <form method="POST" action="{{route('usuaris/edit/post', ['id_user' => request()->route()->parameters()['id_user']])}}">
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
                                <label class="customLabel" for="data_naixement">Data naixement:</label>
                                <input class="customInput" type="date" name="data_naixement" id="data_naixement" value="{{date('Y-m-d', strtotime($response['data_naixement']))}}" required placeholder="Introdueix la data de naixement" />
                            </div>
                            <div>
                                <label class="customLabel" for="email">Email:</label>
                                <input class="customInput" type="email" name="email" id="email" value="{{$response['email']}}" required placeholder="Introdueix l'email" />
                            </div>
                            <div>
                                <label class="customLabel" for="url_foto">URL Foto:</label>
                                <input class="customInput" type="text" name="url_foto" id="url_foto" value="{{$response['url_foto']}}" required placeholder="Introdueix la url de la foto" />
                            </div>
                            <div>
                                <label class="customLabel" for="password">Password:</label>
                                <input class="customInput" type="password" name="password" id="password" value="" required pattern=".{8,}" placeholder="Introdueix la contrasenya" />
                            </div>
                        </div>
                        <br><input class="customSubmitFiltro btn btn-primary" type="submit" value="Editar"/>
                    </form>
                    <div class="ml-5">
                        <img class="imgPerfil" src="{{$response['url_foto']}}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
