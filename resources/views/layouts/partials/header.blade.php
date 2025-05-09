<header>
    <nav>
        <ul>
             <li><a href="{{route('home')}}" class="{{request()->routeIs('show') ? 'active': ''}}">Home</a></li>
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.index') ? 'active': ''}}">Cursos</a></li>
            <li><a href="{{route('contact')}}" class="{{request()->routeIs('Contacto') ? 'active': ''}}">Contact</a>
        </ul>    
    </nav>
</header>