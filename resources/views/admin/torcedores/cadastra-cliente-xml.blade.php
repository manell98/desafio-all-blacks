@extends('adminlte::page')

@section('content')

    {!! Form::open(['route' => 'torcedores.store', 'class' => 'form form-search form-ds']) !!}

@foreach($xml->torcedor as $torcedor)
    @if($torcedor->attributes()['email'] == $email)

    <h3 class="text-center">Cadastrar Torcedor: <b>{{$torcedor->attributes()['nome']}}</b></h3>

    <div class="content-din">
        
        @if( isset($errors) && count($errors) > 0 )
        <div class="alert alert-warning">
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
        @endif
        
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
                            <input type="text" name="nome" class="form-control" placeholder="Digite o nome:" value="{{$torcedor->attributes()['nome']}}" required>
                            </div>
                            <div class="form-group form-group col-md-4">
                                <label>Documento:</label>
                                <input type="text" name="documento" class="form-control" placeholder="Documento:" value="{{$torcedor->attributes()['documento']}}" required>
                            </div>
                            <div class="form-group form-group col-md-8">
                                <label>E-mail:</label>
                                <input type="text" name="email" class="form-control" placeholder="E-mail:" value="{{$torcedor->attributes()['email']}}" required>
                            </div>
                            <div class="form-group form-group col-md-4">
                                <label>Telefone:</label>
                                <input type="text" name="telefone" class="form-control" placeholder="Telefone:" value="{{$torcedor->attributes()['telefone']}}" required>
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
                                    <input type="text" name="cep" class="form-control" placeholder="Digite o cep:" value="{{$torcedor->attributes()['cep']}}" required>
                                </div>
                                <div class="form-group form-group col-md-8">
                                    <label>Endereco:</label>
                                    <input type="text" name="endereco" class="form-control" placeholder="Digite o endereco:" value="{{$torcedor->attributes()['endereco']}}" required>
                                </div>
                                <div class="form-group form-group col-md-6">
                                    <label>Bairro:</label>
                                    <input type="text" name="bairro" class="form-control" placeholder="Digite o bairro:" value="{{$torcedor->attributes()['bairro']}}" required>
                                </div>
                                <div class="form-group form-group col-md-4">
                                    <label>Cidade:</label>
                                    <input type="text" name="cidade" class="form-control" placeholder="Digite a cidade:" value="{{$torcedor->attributes()['cidade']}}" required>
                                </div>
                                <div class="form-group form-group col-md-2">
                                    <label>Estado:</label>
                                    <input type="text" name="uf" class="form-control" placeholder="Digite o estado:" value="{{$torcedor->attributes()['uf']}}" required>
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
    @else
    @endif
@endforeach 
        
    {!! Form::close() !!}
           
</div>

@stop