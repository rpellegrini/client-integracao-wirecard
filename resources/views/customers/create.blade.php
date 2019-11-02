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
                <small class="help-block text-danger">
                    {{ $errors->first('name') }}
                </small>
             @endif
        </div>

        <div class="col-4">
            {!! Form::label('email', 'E-mail: ', ['class' => 'color-blue']) !!}
            {!! Form::text('email', null, ['class'=>'form-control','id' => 'email', 'autocomplete' => 'off']) !!}
            @if ($errors->has('email'))
              <small class="help-block text-danger">
                    {{ $errors->first('email') }}
              </small>
             @endif
        </div>

        <div class="col-4">
            {!! Form::label('document', 'CPF: ', ['class' => 'color-blue']) !!}
            {!! Form::text('document', null, ['class'=>'form-control','id' => 'document', 'autocomplete' => 'off']) !!}
            @if ($errors->has('document'))
                  <small class="help-block text-danger">
                    {{ $errors->first('document') }}
                </small>
             @endif
        </div>

        <div class="col-4 pt-3">
            {!! Form::label('birthDate', 'Data Nascimento: ', ['class' => 'color-blue']) !!}
            {!! Form::text('birthDate', '1983-10-04', ['class'=>'form-control','id' => 'birthDate', 'autocomplete' => 'off']) !!}
            @if ($errors->has('birthDate'))
                  <small class="help-block text-danger">
                    {{ $errors->first('birthDate') }}
                </small>
             @endif
        </div>

        <div class="col-1 pt-3">
            {!! Form::label('areaCode', 'DDD: ', ['class' => 'color-blue']) !!}
            {!! Form::text('areaCode', null, ['class'=>'form-control','id' => 'areaCode', 'autocomplete' => 'off']) !!}
            @if ($errors->has('areaCode'))
                  <small class="help-block text-danger">
                    {{ $errors->first('areaCode') }}
                </small>
             @endif
        </div>

        <div class="col-3 pt-3">
            {!! Form::label('phone', 'Telefone: ', ['class' => 'color-blue']) !!}
            {!! Form::text('phone', null, ['class'=>'form-control','id' => 'phone', 'autocomplete' => 'off']) !!}
            @if ($errors->has('phone'))
              <small class="help-block text-danger">
                    {{ $errors->first('phone') }}
              </small>
             @endif
        </div>

</div>

<div class="form-group col-12 pt-4 row">
        <div class="col-4">
            {!! Form::label('street', 'Logradouro: ', ['class' => 'color-blue']) !!}
            {!! Form::text('street', null, ['class'=>'form-control','id' => 'street', 'autocomplete' => 'off']) !!}
            @if ($errors->has('street'))
                <small class="help-block text-danger">
                    {{ $errors->first('street') }}
                </small>
             @endif
        </div>

        <div class="col-4">
            {!! Form::label('streetNumber', 'Número: ', ['class' => 'color-blue']) !!}
            {!! Form::text('streetNumber', null, ['class'=>'form-control','id' => 'streetNumber', 'autocomplete' => 'off']) !!}
            @if ($errors->has('streetNumber'))
                <small class="help-block text-danger">
                    {{ $errors->first('streetNumber') }}
                </small>
             @endif
        </div>

        <div class="col-4">
            {!! Form::label('district', 'Bairro: ', ['class' => 'color-blue']) !!}
            {!! Form::text('district', null, ['class'=>'form-control','id' => 'district', 'autocomplete' => 'off']) !!}
            @if ($errors->has('district'))
                <small class="help-block text-danger">
                    {{ $errors->first('district') }}
                </small>
             @endif
        </div>

        <div class="col-4 pt-3">
            {!! Form::label('zipCode', 'CEP: ', ['class' => 'color-blue']) !!}
            {!! Form::text('zipCode', null, ['class'=>'form-control','id' => 'zipCode', 'autocomplete' => 'off']) !!}
            @if ($errors->has('zipCode'))
                <small class="help-block text-danger">
                    {{ $errors->first('zipCode') }}
                </small>
             @endif
        </div>

        <div class="col-4 pt-3">
            {!! Form::label('city', 'Cidade: ', ['class' => 'color-blue']) !!}
            {!! Form::text('city', null, ['class'=>'form-control','id' => 'city', 'autocomplete' => 'off']) !!}
            @if ($errors->has('city'))
              <small class="help-block text-danger">
                    {{ $errors->first('city') }}
                </small>
             @endif
        </div>

        <div class="col-4 pt-3">
            {!! Form::label('state', 'Estado: ', ['class' => 'color-blue']) !!}
            {!! Form::text('state', null, ['class'=>'form-control','id' => 'state', 'autocomplete' => 'off']) !!}
            @if ($errors->has('state'))
              <small class="help-block text-danger">
                    {{ $errors->first('state') }}
                </small>
             @endif
        </div>
</div>

   <div class="col-md-12 text-right">
      <button class="btn btn-success" type="submit" data-toggle="tooltip" title="Cadastrar" > <span>Cadastrar</span></button>
   </div>

  {!! Form::close() !!}

@endsection
@section('scripts')
@parent
<script type="text/javascript">
    $(document).ready(function () {

    });
</script>
@endsection
