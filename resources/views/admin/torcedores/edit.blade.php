@extends('adminlte::page')

@section('content')
    
<h3 class="text-center">Editar Torcedor: <b>{{$torcedor->nome}}</b></h3>

<div class="content-din">
    
    @if( isset($errors) && count($errors) > 0 )
    <div class="alert alert-warning">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>
    @endif
   
    {!! Form::model($torcedor, ['route' => ['torcedores.update', $torcedor->id], 'class' => 'form form-search form-ds', 'method' => 'PUT']) !!}
    
<h3> <i class="fa fa-user"></i> DADOS PESSOAIS </h3> 

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-group col-md-8">
                            <label>Nome:</label>
                        <input type="text" name="nome" class="form-control" placeholder="Digite o nome:" value="{{$torcedor->nome}}" required>
                        </div>
                        <div class="form-group form-group col-md-4">
                            <label>Documento:</label>
                            <input type="text" name="documento" class="form-control" placeholder="Documento:" value="{{$torcedor->documento}}" required>
                        </div>
                        <div class="form-group form-group col-md-8">
                            <label>E-mail:</label>
                            <input type="text" name="email" class="form-control" placeholder="E-mail:" value="{{$torcedor->email}}" required>
                        </div>
                        <div class="form-group form-group col-md-4">
                            <label>Telefone:</label>
                            <input type="text" name="telefone" class="form-control" placeholder="Telefone:" value="{{$torcedor->telefone}}" onkeypress="mask(this, mphone);" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
       
<h3> <span class="glyphicon glyphicon-envelope"></span> ENDEREÇO</h3>
    
<div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group col-md-4">
                                <label>Cep:</label>
                                <input type="text" name="cep" class="form-control" placeholder="Digite o cep:" value="{{$torcedor->cep}}" id="cep" onkeypress="mascarar(this, '#####-###')" maxlength="9" required>
                            </div>
                            <div class="form-group form-group col-md-8">
                                <label>Endereco:</label>
                                <input type="text" name="endereco" class="form-control" placeholder="Digite o endereco:" value="{{$torcedor->endereco}}" id="rua" required>
                            </div>
                            <div class="form-group form-group col-md-6">
                                <label>Bairro:</label>
                                <input type="text" name="bairro" class="form-control" placeholder="Digite o bairro:" value="{{$torcedor->bairro}}" id="bairro" required>
                            </div>
                            <div class="form-group form-group col-md-4">
                                <label>Cidade:</label>
                                <input type="text" name="cidade" class="form-control" placeholder="Digite a cidade:" value="{{$torcedor->cidade}}" id="cidade" required>
                            </div>
                            <div class="form-group form-group col-md-2">
                                <label>Estado:</label>
                                <input type="text" name="uf" class="form-control" placeholder="Digite o estado:" value="{{$torcedor->uf}}" id="uf" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
        <div class="form-group">
            <button class="btn btn-labeled btn-success"> <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span> SALVAR </button> 
        </div>
    
    {!! Form::close() !!}
           
</div>

@stop