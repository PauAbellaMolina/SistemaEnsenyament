@section('content')
<div class="d-flex flex-row justify-start">
    <div id="sideMenu">
        <div><a class="{{ Request::is('home') ? 'activeSideMenu' : '' }}" href="{{ route('home') }}">Home</a></div>
        <div><a class="{{ Request::is('usuarios') ? 'activeSideMenu' : (Request::is('usuarios/*') ? 'activeSideMenu' : '') }}" href="{{ route('usuarios') }}">Usuarios</a></div>
        <div><a class="{{ Request::is('productos') ? 'activeSideMenu' : (Request::is('productos/*') ? 'activeSideMenu' : '') }}" href="{{ route('productos') }}">Productos</a></div>
        <div><a class="{{ Request::is('tarifas/*') ? 'activeSideMenu' : '' }}" href="{{ route('tarifas/filter/all') }}">Tarifas</a></div>
        <div><a class="{{ Request::is('categorias') ? 'activeSideMenu' : (Request::is('categorias/*') ? 'activeSideMenu' : '') }}" href="{{ route('categorias') }}">Categorías</a></div>
    </div>
    @yield('main')
</div>
@endsection
