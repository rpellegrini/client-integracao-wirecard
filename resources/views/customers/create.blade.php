@extends('core.base')

@section('content')

<div class="pl-3 pt-4">
  <span class="h3">Novo Cliente</span>
</div>

{!! Form::open(['id'=>'formAddCustomer', 'route'=>['customer.store'], 'method'=>'post']) !!}

<div class="form-group col-12 pt-4 row">
        <div class="col-4">
            {!! Form::label('name', 'Nome Completo: ', ['class' => 'color-blue']) !!}
            {!! Form::text('name', null, ['class'=>'form-control','id' => 'name', 'autocomplete' => 'off']) !!}
            @if ($errors->has('name'))
                <span class="help-block">
                    {{ $errors->first('name') }}
                </span>
             @endif
        </div>

        <div class="col-4">
            {!! Form::label('email', 'E-mail: ', ['class' => 'color-blue']) !!}
            {!! Form::text('email', null, ['class'=>'form-control','id' => 'email', 'autocomplete' => 'off']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                    {{ $errors->first('email') }}
                </span>
             @endif
        </div>

        <div class="col-4">
            {!! Form::label('document', 'CPF: ', ['class' => 'color-blue']) !!}
            {!! Form::text('document', null, ['class'=>'form-control','id' => 'document', 'autocomplete' => 'off']) !!}
            @if ($errors->has('document'))
                <span class="help-block">
                    {{ $errors->first('document') }}
                </span>
             @endif
        </div>

        <div class="col-4 pt-3">
            {!! Form::label('birthDate', 'Data Nascimento: ', ['class' => 'color-blue']) !!}
            {!! Form::text('birthDate', null, ['class'=>'form-control','id' => 'birthDate', 'autocomplete' => 'off']) !!}
            @if ($errors->has('birthDate'))
                <span class="help-block">
                    {{ $errors->first('birthDate') }}
                </span>
             @endif
        </div>

        <div class="col-4 pt-3">
            {!! Form::label('phone', 'Telefone: ', ['class' => 'color-blue']) !!}
            {!! Form::text('phone', null, ['class'=>'form-control','id' => 'phone', 'autocomplete' => 'off']) !!}
            @if ($errors->has('phone'))
                <span class="help-block">
                    {{ $errors->first('phone') }}
                </span>
             @endif
        </div>


</div>

   <div class="col-md-12 text-right">
      <button class="btn btn-success" type="submit" data-toggle="tooltip" title="Cadastrar" > <span>Cadastrar</span></button>
   </div>

  {!! Form::close() !!}

@endsection
