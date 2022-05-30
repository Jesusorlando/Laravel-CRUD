@extends('layouts.app')

@section('template_title')
    {{ $dispositivo->name ?? 'Show Dispositivo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Dispositivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dispositivos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Clave:</strong>
                            {{ $dispositivo->clave }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $dispositivo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cvetipo:</strong>
                            {{ $dispositivo->cveTipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
