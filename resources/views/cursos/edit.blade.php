@extends('layouts.layout')
@section('title', 'Home')

@section('content')
   
    <form action=" {{ route('cursos.update', $curso) }}" method="POST" class="container mt-4">
        @csrf
        @method('PUT')
        <a href="{{ route('cursos.index') }}" class="btn btn-primary">Volver a la lista de cursos</a>
        <h2>Editar Curso</h2>
        <div class="mb-3">
            <label for="nombre" class="">Nombre del curso</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre', $curso->nombre)}}" required>
            @error('nombre')
                <div class="alert ">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug', $curso->slug)}}" required>  
            @error('slug')
                <div class="alert ">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"  required>{{old('descripcion', $curso->descripcion)}}</textarea>
            @error('descripcion')
                <div class="alert ">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoría</label>
            <input type="text" class="form-control" id="categoria" name="categoria" value="{{old('categoria', $curso->categoria)}}" required>  
            @error('categoria')
                <div class="alert ">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Crear Curso</button>
    </form>
@endsection