@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="element" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Alumnes</h1>
            <hr/>
            <div class="container">
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3>Filtrar:</h3>
                        <form method="POST" action="{{route('alumnes/id')}}">
                            {{ csrf_field() }}
                            <input class="customInputFiltro" type="text" name="id" value="" required placeholder="ID de l'alumne" />
                            <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                        </form>
                        <form class="mt-1" method="POST" action="{{route('alumnes/nom')}}">
                            {{ csrf_field() }}
                            <input class="customInputFiltro" type="text" name="nom" value="" required placeholder="Nom de l'alumne" />
                            <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                        </form>
                        <form class="mt-1" method="POST" action="{{route('alumnes/centre')}}">
                            {{ csrf_field() }}
                            <input class="customInputFiltro" type="text" name="centre_id" value="" required placeholder="ID del centre de l'alumne" />
                            <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                        </form>
                        <form class="mt-1" method="POST" action="{{route('alumnes/ensenyament')}}">
                            {{ csrf_field() }}
                            <input class="customInputFiltro" type="text" name="ensenyament_id" value="" required placeholder="ID de l'ensenyament de l'alumne" />
                            <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                        </form>
                    </div>
                    <div>
                        <h1><a class="customLink" title="Nou alumne" href="{{route('alumnes/nou')}}">+</a></h1>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-12">
                        <div class="card-header d-flex flex-row font-weight-bolder coloured">
                            <p class="idCol col-auto">ID</p>
                            <p class="col-md-1">Nom</p>
                            <p class="col-md-2">Cognoms</p>
                            <p class="col-md-2">Data naixement</p>
                            <p class="col-md-2">Centre</p>
                            <p class="col-md-3">Ensenyament</p>
                            <p class="col-md-1">Accions</p>
                        </div>
                        @foreach ($response as $alumne)
                            <div id="app"><alumne-component v-bind:alumne="{{ json_encode($alumne) }}"></alumne-component></div>
                        @endforeach
                    </div>
                </div>
            </div>

            <script src="{{asset('js/app.js')}}"></script>
        </div>
    </div>
</div>
@endsection
