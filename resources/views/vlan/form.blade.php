<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('clave') }}
            {{ Form::text('clave', $vlan->clave, ['class' => 'form-control' . ($errors->has('clave') ? ' is-invalid' : ''), 'placeholder' => 'Clave']) }}
            {!! $errors->first('clave', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segmento') }}
            {{ Form::text('segmento', $vlan->segmento, ['class' => 'form-control' . ($errors->has('segmento') ? ' is-invalid' : ''), 'placeholder' => 'Segmento']) }}
            {!! $errors->first('segmento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desc') }}
            {{ Form::text('desc', $vlan->desc, ['class' => 'form-control' . ($errors->has('desc') ? ' is-invalid' : ''), 'placeholder' => 'Desc']) }}
            {!! $errors->first('desc', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>