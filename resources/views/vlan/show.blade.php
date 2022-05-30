@extends('layouts.app')

@section('template_title')
    {{ $vlan->name ?? 'Show Vlan' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Vlan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vlans.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Clave:</strong>
                            {{ $vlan->clave }}
                        </div>
                        <div class="form-group">
                            <strong>Segmento:</strong>
                            {{ $vlan->segmento }}
                        </div>
                        <div class="form-group">
                            <strong>Desc:</strong>
                            {{ $vlan->desc }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
