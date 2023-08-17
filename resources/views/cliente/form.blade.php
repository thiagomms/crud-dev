<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nome') }}
            {{ Form::text('nome', $cliente->nome, ['class' => 'form-control' . ($errors->has('nome') ? ' is-invalid' : ''), 'placeholder' => 'Nome']) }}
            {!! $errors->first('nome', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('data_de_nascimento') }}
            {{ Form::text('data_de_nascimento', $cliente->data_de_nascimento, ['class' => 'form-control' . ($errors->has('data_de_nascimento') ? ' is-invalid' : ''), 'placeholder' => ' AAAA/MM/DD ']) }}
            {!! $errors->first('data_de_nascimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cpf') }}
            {{ Form::text('cpf', $cliente->cpf, ['class' => 'form-control' . ($errors->has('cpf') ? ' is-invalid' : ''), 'placeholder' => 'Cpf']) }}
            {!! $errors->first('cpf', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idade') }}
            {{ Form::text('idade', $cliente->idade, ['class' => 'form-control' . ($errors->has('idade') ? ' is-invalid' : ''), 'placeholder' => 'Idade']) }}
            {!! $errors->first('idade', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>