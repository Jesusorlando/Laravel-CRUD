<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('matricula') }}
            {{ Form::text('matricula', $alumno->matricula, ['class' => 'form-control' . ($errors->has('matricula') ? ' is-invalid' : ''), 'placeholder' => 'Matricula']) }}
            {!! $errors->first('matricula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $alumno->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidoPaterno') }}
            {{ Form::text('apellidoPaterno', $alumno->apellidoPaterno, ['class' => 'form-control' . ($errors->has('apellidoPaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidopaterno']) }}
            {!! $errors->first('apellidoPaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidoMaterno') }}
            {{ Form::text('apellidoMaterno', $alumno->apellidoMaterno, ['class' => 'form-control' . ($errors->has('apellidoMaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidomaterno']) }}
            {!! $errors->first('apellidoMaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>