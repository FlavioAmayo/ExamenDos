@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bienvenido al Sistema de Gestión de Alumnos</h1>
    <a href="{{ route('alumnos.index') }}" class="btn btn-primary">Ver Alumnos</a>
    <a href="{{ route('alumnos.create') }}" class="btn btn-primary">Agregar Alumno</a>
</div>
@endsection
