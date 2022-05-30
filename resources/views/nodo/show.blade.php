@extends('layouts.app')

@section('template_title')
    {{ $nodo->name ?? 'Show Nodo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Nodo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('nodos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Clave:</strong>
                            {{ $nodo->clave }}
                        </div>
                        <div class="form-group">
                            <strong>Cvevlan:</strong>
                            {{ $nodo->cveVlan }}
                        </div>
                        <div class="form-group">
                            <strong>Cvedispositivo:</strong>
                            {{ $nodo->cveDispositivo }}
                        </div>
                        <div class="form-group">
                            <strong>Cvepersona:</strong>
                            {{ $nodo->cvePersona }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
