<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $persona->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidoPaterno') }}
            {{ Form::text('apellidoPaterno', $persona->apellidoPaterno, ['class' => 'form-control' . ($errors->has('apellidoPaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidopaterno']) }}
            {!! $errors->first('apellidoPaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidoMaterno') }}
            {{ Form::text('apellidoMaterno', $persona->apellidoMaterno, ['class' => 'form-control' . ($errors->has('apellidoMaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidomaterno']) }}
            {!! $errors->first('apellidoMaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $persona->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cveDepto') }}
            {{ Form::text('cveDepto', $persona->cveDepto, ['class' => 'form-control' . ($errors->has('cveDepto') ? ' is-invalid' : ''), 'placeholder' => 'Cvedepto']) }}
            {!! $errors->first('cveDepto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clave') }}
            {{ Form::text('clave', $persona->clave, ['class' => 'form-control' . ($errors->has('clave') ? ' is-invalid' : ''), 'placeholder' => 'Clave']) }}
            {!! $errors->first('clave', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>