@extends('adminlte::page')

@section('content')

<h3 class="text-center">Enviar comunicado aos torcedores</h3>

@if( Session::has('success') )
    <div class="alert alert-success hide-msg" style="float: left; width: 100%; margin: 10px 0px;">
        {{Session::get('success')}}
    </div>
@endif

{!! Form::open(['route' => 'torcedores.envia', 'class' => 'form form-search form-ds']) !!}

<div class="row">
    <div class="col-md-12">
        <div class="form-group form-group col-md-4">
            <label>Assunto:</label>
            <input type="text" name="assunto" class="form-control" placeholder="Digite o assunto:" required>
        </div>
        <div class="form-group form-group col-md-12">
            <label>Mensagem:</label>
            <textarea name="mensagem" class="form-control" rows="5" style="resize: none" placeholder="Digite a mensagem:" required></textarea>
        </div>
        <div class="form-group form-group col-md-8">
            <label>Enviar para:</label> <br>
            <select name="email[]" class="selectpicker" 
                    multiple data-live-search="true" 
                    multiple data-selected-text-format="count" 
                    multiple data-actions-box="true"
                    title="Selecionar torcedores">
                @foreach ($torcedores as $t)
                    <option value="{{ $t->email }}" data-subtext="{{ $t->email }}">{{ $t->nome }}</option>
                @endforeach    
            </select> 
        </div>
    </div>
</div>

<div class="form-group col-md-12">
    <button class="btn btn-labeled btn-primary"> <span class="btn-label"><i class="glyphicon glyphicon-envelope"></i></span> Enviar </button> 
</div>
      
{!! Form::close() !!}

@stop