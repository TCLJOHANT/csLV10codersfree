<header>
    <h1>Bandas TCL</h1>
    <nav>
        <ul>
            <li>
                <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Inicio</a> 
            </li>
            <li>
                <a href="{{route('banda.index')}}" class="{{request()->routeIs('banda.*') ? 'active' : ''}}">Banda</a>
            </li>
            <li>
                <a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a> 
            </li>
        </ul>
    </nav>
</header>