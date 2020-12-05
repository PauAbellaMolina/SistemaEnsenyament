@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="element" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Centres</h1>
            <hr/>
            <div class="container">
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3>Filtrar:</h3>
                        <form method="POST" action="{{route('centres/id')}}">
                            {{ csrf_field() }}
                            <input class="customInputFiltro" type="text" name="id" value="" required placeholder="ID del centre" />
                            <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                        </form>
                        <form class="mt-1" method="POST" action="{{route('centres/nom')}}">
                            {{ csrf_field() }}
                            <input class="customInputFiltro" type="text" name="nom" value="" required placeholder="Nom del centre" />
                            <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                        </form>
                        <form class="mt-1" method="POST" action="{{route('centres/poblacio')}}">
                            {{ csrf_field() }}
                            <input class="customInputFiltro" type="text" name="poblacio" value="" required placeholder="Població del centre" />
                            <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                        </form>
                    </div>
                    <div>
                        <h1><a class="customLink" title="Nou centre" href="{{route('centres/nou')}}">+</a></h1>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-12">
                        <div class="card-header d-flex flex-row font-weight-bolder coloured">
                            <p class="idCol col-auto">ID</p>
                            <p class="col-md-4">Nom</p>
                            <p class="col-md-3">Direcció</p>
                            <p class="col-md-3">Població</p>
                            <p class="col-md-1">Accions</p>
                        </div>
                        @foreach ($response as $centre)
                            <div id="app"><centre-component v-bind:centre="{{ json_encode($centre) }}"></centre-component></div>
                        @endforeach
                    </div>
                </div>
            </div>

            <script src="{{asset('js/app.js')}}"></script>
        </div>
    </div>
</div>
@endsection
