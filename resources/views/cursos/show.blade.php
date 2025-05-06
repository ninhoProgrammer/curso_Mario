
@extends('layouts.layout')
@section('title', 'Cursos - ' . $curso->nombre)
@section('content')
    <div class="container">
        <h1>Detalles del Curso: {{ $curso->nombre }}</h1>
        <p><strong>Descripción:</strong> {{ $curso->descripcion }}</p>
        <p><strong>Categoría:</strong> {{ $curso->categoria }}</p>
        <a href="{{ route('cursos.edit', $curso->id) }}" class="">Editar Curso</a>
        <a href="{{ route('cursos.index') }}" class="">Volver a la lista de cursos</a>
    </div>
@endsection
