<!-- resources/views/ingreso.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ingresar Alumno</h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="curso">Curso</label>
            <input type="text" class="form-control" id="curso" name="curso" required>
        </div>
        <div class="form-group">
            <label for="nota1">Nota 1</label>
            <input type="number" class="form-control" id="nota1" name="nota1" min="0" max="20" required>
        </div>
        <div class="form-group">
            <label for="nota2">Nota 2</label>
            <input type="number" class="form-control" id="nota2" name="nota2" min="0" max="20" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
