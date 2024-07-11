@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Alumno</h1>
    <p><strong>Nombre:</strong> {{ $alumno->nombre }}</p>
    <p><strong>Curso:</strong> {{ $alumno->curso }}</p>
    <p><strong>Nota 1:</strong> {{ $alumno->nota1 }}</p>
    <p><strong>Nota 2:</strong> {{ $alumno->nota2 }}</p>
    <p><strong>Promedio:</strong> {{ $promedio }}</p>
    <p><strong>Condición:</strong> {{ $condicion }}</p>
    <p><strong>Fecha de Registro:</strong> {{ $alumno->created_at }}</p>
</div>
@endsection
