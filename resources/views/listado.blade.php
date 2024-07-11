<!-- resources/views/listado.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Alumnos</h1>
    <ul class="list-group">
        @foreach($alumnos as $alumno)
        <li class="list-group-item">
            <a href="#" data-toggle="modal" data-target="#alumnoModal{{ $alumno->id }}">{{ $alumno->nombre }}</a>

            <!-- Modal -->
            <div class="modal fade" id="alumnoModal{{ $alumno->id }}" tabindex="-1" role="dialog" aria-labelledby="alumnoModalLabel{{ $alumno->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="alumnoModalLabel{{ $alumno->id }}">Detalles del Alumno</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Nombre:</strong> {{ $alumno->nombre }}</p>
                            <p><strong>Curso:</strong> {{ $alumno->curso }}</p>
                            <p><strong>Nota 1:</strong> {{ $alumno->nota1 }}</p>
                            <p><strong>Nota 2:</strong> {{ $alumno->nota2 }}</p>
                            <p><strong>Promedio:</strong> {{ ($alumno->nota1 + $alumno->nota2) / 2 }}</p>
                            <p><strong>Condición:</strong> {{ ($alumno->nota1 + $alumno->nota2) / 2 >= 13.5 ? 'Aprobado' : 'Desaprobado' }}</p>
                            <p><strong>Fecha del Registro:</strong> {{ $alumno->created_at }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
@endsection
