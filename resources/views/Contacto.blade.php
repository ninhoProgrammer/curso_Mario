@extends('layouts.layout')
@section('title', 'Contacto')

@section('content')
    <div class="container">
        <form action="{{ route('Contactanos') }}" method="POST">
            @csrf
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Enviar</button>
        </form>
        
    </div>
@endsection