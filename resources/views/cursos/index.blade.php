
@extends('layouts.layout')
@section('title', 'Home')

@section('content')
    <div class="container">
        <h1>Bienvenido a la página de inicio</h1>
        <p>Esta es la página principal de nuestro sitio web.</p>
        <p>Desde aquí puedes navegar a otras secciones.</p>
        <a href="{{ route('cursos.create') }}" class="btn btn-primary">Crear Curso</a>
        <ul>
            @foreach ($cursos as $curso)
                <li>
                <!--a href="{{ route('cursos.show', $curso->id) }}">{{ $curso->nombre }}</a-->
                    
                     <a href="{{ route('cursos.show', $curso->id) }}" class="btn btn-warning">{{ $curso->nombre }}</a>
                </li>
                
            @endforeach
        </ul>
    </div>
@endsection