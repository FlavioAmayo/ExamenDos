@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Alumnos</h1>
    <ul>
        @foreach ($alumnos as $alumno)
            <li>
                <a href="#" class="alumno-detalle" data-id="{{ $alumno->id }}">{{ $alumno->nombre }}</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('alumnos.create') }}" class="btn btn-primary">Agregar Alumno</a>

    <!-- Modal -->
    <div class="modal fade" id="alumnoModal" tabindex="-1" role="dialog" aria-labelledby="alumnoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alumnoModalLabel">Detalle del Alumno</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Nombre:</strong> <span id="modal-nombre"></span></p>
                    <p><strong>Curso:</strong> <span id="modal-curso"></span></p>
                    <p><strong>Nota 1:</strong> <span id="modal-nota1"></span></p>
                    <p><strong>Nota 2:</strong> <span id="modal-nota2"></span></p>
                    <p><strong>Promedio:</strong> <span id="modal-promedio"></span></p>
                    <p><strong>Condición:</strong> <span id="modal-condicion"></span></p>
                    <p><strong>Fecha de Registro:</strong> <span id="modal-fecha"></span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var alumnoDetalles = document.querySelectorAll('.alumno-detalle');
        alumnoDetalles.forEach(function (detalle) {
            detalle.addEventListener('click', function (e) {
                e.preventDefault();
                var alumnoId = this.dataset.id;
                fetch('/alumnos/' + alumnoId)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('modal-nombre').textContent = data.nombre;
                        document.getElementById('modal-curso').textContent = data.curso;
                        document.getElementById('modal-nota1').textContent = data.nota1;
                        document.getElementById('modal-nota2').textContent = data.nota2;
                        document.getElementById('modal-promedio').textContent = data.promedio;
                        document.getElementById('modal-condicion').textContent = data.condicion;
                        document.getElementById('modal-fecha').textContent = data.fecha_registro;
                        $('#alumnoModal').modal('show');
                    });
            });
        });
    });
</script>
@endsection
