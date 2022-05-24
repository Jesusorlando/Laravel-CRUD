@extends('layouts.app')

@section('template_title')
    {{ $alumno->name ?? 'Show Alumno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Alumno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Matricula:</strong>
                            {{ $alumno->matricula }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $alumno->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidopaterno:</strong>
                            {{ $alumno->apellidoPaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidomaterno:</strong>
                            {{ $alumno->apellidoMaterno }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
