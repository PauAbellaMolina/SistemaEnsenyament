@section('content')
<div class="d-flex flex-row justify-start">
    <div id="sideMenu">
        <div><a class="{{ Request::is('home') ? 'activeSideMenu' : '' }}" href="{{ route('home') }}">Home</a></div>
        <div><a class="{{ Request::is('usuaris') ? 'activeSideMenu' : (Request::is('usuaris/*') ? 'activeSideMenu' : '') }}" href="{{ route('usuaris') }}">Usuaris</a></div>
        <div><a class="{{ Request::is('alumnes') ? 'activeSideMenu' : (Request::is('alumnes/*') ? 'activeSideMenu' : '') }}" href="{{ route('alumnes') }}">Alumnes</a></div>
        <div><a class="{{ Request::is('centres') ? 'activeSideMenu' : (Request::is('centres/*') ? 'activeSideMenu' : '') }}" href="{{ route('centres') }}">Centres</a></div>
        <div><a class="{{ Request::is('ensenyaments') ? 'activeSideMenu' : (Request::is('ensenyaments/*') ? 'activeSideMenu' : '') }}" href="{{ route('ensenyaments') }}">Ensenyaments</a></div>
    </div>
    @yield('main')
</div>
@endsection
