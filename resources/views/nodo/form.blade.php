<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('clave') }}
            {{ Form::text('clave', $nodo->clave, ['class' => 'form-control' . ($errors->has('clave') ? ' is-invalid' : ''), 'placeholder' => 'Clave']) }}
            {!! $errors->first('clave', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cveVlan') }}
            {{ Form::text('cveVlan', $nodo->cveVlan, ['class' => 'form-control' . ($errors->has('cveVlan') ? ' is-invalid' : ''), 'placeholder' => 'Cvevlan']) }}
            {!! $errors->first('cveVlan', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cveDispositivo') }}
            {{ Form::text('cveDispositivo', $nodo->cveDispositivo, ['class' => 'form-control' . ($errors->has('cveDispositivo') ? ' is-invalid' : ''), 'placeholder' => 'Cvedispositivo']) }}
            {!! $errors->first('cveDispositivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cvePersona') }}
            {{ Form::text('cvePersona', $nodo->cvePersona, ['class' => 'form-control' . ($errors->has('cvePersona') ? ' is-invalid' : ''), 'placeholder' => 'Cvepersona']) }}
            {!! $errors->first('cvePersona', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>