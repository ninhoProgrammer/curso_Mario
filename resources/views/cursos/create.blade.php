
@extends('layouts.layout')
@section('title', 'Home')

@section('content')
    
    <form action=" {{ route('cursos.store') }}" method="POST" class="container mt-4">
        @csrf
        <h2>Crear Curso</h2>
        <div class="mb-3">
            <label for="nombre" class="">Nombre del curso</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" required>
            @error('nombre')
                <div class="alert ">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug')}}" required>  
            @error('slug')
                <div class="alert ">{{ $message }}</div>
            @enderror   
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="5" required>{{old('descripcion')}}</textarea>
            @error('descripcion')
                <div class="alert ">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoría</label>
            <input type="text" class="form-control" id="categoria" name="categoria" value="{{old('categoria')}}" required>  
            @error('categoria')
                <div class="alert ">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Crear Curso</button>
    </form>
@endsection