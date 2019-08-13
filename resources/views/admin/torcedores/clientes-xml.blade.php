@extends('adminlte::page')

@section('content')

<h3 class="text-center">Lista XML de Torcedores - {{ $xml->torcedor->count() }} registros</h3>

<div class="class-btn-insert"> </br>
    <a class="btn icon-btn btn-primary" href="{{route('torcedores.formXml')}}">
        <i class="glyphicon btn-glyphicon glyphicon-plus text-primary"></i> NOVO
    </a>
</div>
    
<div class="span7">   
    <div class="widget stacked widget-table action-table">
        <div class="widget-content">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                @if( Session::has('success') )
                <div class="alert alert-success hide-msg" style="float: left; width: 100%; margin: 10px 0px;">
                    {{Session::get('success')}}
                </div>
                @endif
                    <tr>
                        <thead style="background-color:#3c8dbc">
                        <th style="text-align:center; color:#fff;">NOME</th>
                        <th style="text-align:center; color:#fff;">DOCUMENTO</th>
                        <th style="text-align:center; color:#fff;">CEP</th>
                        <th style="text-align:center; color:#fff;">ENDERECO</th>
                        <th style="text-align:center; color:#fff;">BAIRRO</th>
                        <th style="text-align:center; color:#fff;">CIDADE</th>
                        <th style="text-align:center; color:#fff;">UF</th>
                        <th style="text-align:center; color:#fff;">TELEFONE</th>
                        <th style="text-align:center; color:#fff;">E-MAIL</th>
                        <th style="text-align:center; color:#fff;">ATIVO</th>
                        <th width="15" style="text-align:center; color:#fff;">AÇÃO</th>
                        </thead>
                    </tr>

                    @forelse($xml->torcedor as $torcedor)
                        <tr>
                            <th style="text-align:center">{{$torcedor->attributes()['nome']}}</th>
                            <th style="text-align:center">{{$torcedor->attributes()['documento']}}</th>
                            <th style="text-align:center">{{$torcedor->attributes()['cep']}}</th>
                            <th style="text-align:center">{{$torcedor->attributes()['endereco']}}</th>
                            <th style="text-align:center">{{$torcedor->attributes()['bairro']}}</th>
                            <th style="text-align:center">{{$torcedor->attributes()['cidade']}}</th>
                            <th style="text-align:center">{{$torcedor->attributes()['uf']}}</th>
                            <th style="text-align:center">{{$torcedor->attributes()['telefone']}}</th>
                            <th style="text-align:center">{{$torcedor->attributes()['email']}}</th>
                            @if ($torcedor->attributes()['ativo'] == 1)
                                <th style="text-align:center"><i class="fas fa-check"></i></th>
                            @else
                                <th style="text-align:center"></th>
                            @endif
                            <td style="text-align:center;">
                                <a href="{{route('torcedores.cadastraClienteXml', $torcedor->attributes()['email'])}}"><span class="btn btn-primary" title="Cadastrar"><i class="fas fa-plus"></i></span></a>
                            </td>
                        </tr>    
                    @empty
                        <p>Nenhum Torcedor Cadastrado</p>
                    @endforelse
                </table>
            </div>
        </div> 
    </div> 
</div> 

@stop