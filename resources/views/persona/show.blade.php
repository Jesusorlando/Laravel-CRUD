@extends('layouts.app')

@section('template_title')
    {{ $persona->name ?? 'Show Persona' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $persona->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidopaterno:</strong>
                            {{ $persona->apellidoPaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidomaterno:</strong>
                            {{ $persona->apellidoMaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $persona->email }}
                        </div>
                        <div class="form-group">
                            <strong>Cvedepto:</strong>
                            {{ $persona->cveDepto }}
                        </div>
                        <div class="form-group">
                            <strong>Clave:</strong>
                            {{ $persona->clave }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
