@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="productos" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Ensenyaments</h1>
            <hr/>
            <div class="container">
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3>Filtrar:</h3>
                        <form method="POST" action="{{route('ensenyaments/id')}}">
                            {{ csrf_field() }}
                            <input class="customInputFiltro" type="text" name="id" value="" required placeholder="ID de l'ensenyament" />
                            <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                        </form>
                        <form class="mt-1" method="POST" action="{{route('ensenyaments/nom')}}">
                            {{ csrf_field() }}
                            <input class="customInputFiltro" type="text" name="nom" value="" required placeholder="Nom de l'ensenyament" />
                            <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                        </form>
                    </div>
                    <div>
                        <h1><a class="customLink" title="Nou ensenyament" href="{{route('ensenyaments/nou')}}">+</a></h1>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-12">
                        <div class="card-header d-flex flex-row font-weight-bolder coloured">
                            <p class="idCol col-auto">ID</p>
                            <p class="col-md-4">Nom</p>
                            <p class="col-md-6">Descripció</p>
                            <p class="col-md-1">Accions</p>
                        </div>
                        @foreach ($response as $ensenyament)
                            <div id="app"><ensenyament-component v-bind:ensenyament="{{ json_encode($ensenyament) }}"></ensenyament-component></div>
                        @endforeach
                    </div>
                </div>
            </div>

            <script src="{{asset('js/app.js')}}"></script>
        </div>
    </div>
</div>
@endsection
