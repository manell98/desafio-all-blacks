@extends('adminlte::page')

@section('content')

<h3 class="text-center">Lista de Torcedores</h3>

{!! Form::open(['route' => 'torcedores.excel', 'class' => 'form form-inline']) !!}
    <button type="submit" class="btn btn-success">
        <i class="fa fa-file-excel" aria-hidden="true"></i> &nbsp Exportar
    </button>       
{!! Form::close() !!}
  
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
                            <th width="100" style="text-align:center; color:#fff;">AÇÕES</th>
                        </thead>
                    </tr>

                    @forelse($torcedores as $torcedor)
                        <tr>
                            <th style="text-align:center">{{$torcedor->nome}}</th>
                            <th style="text-align:center">{{$torcedor->documento}}</th>
                            <th style="text-align:center">{{$torcedor->cep}}</th>
                            <th style="text-align:center">{{$torcedor->endereco}}</th>
                            <th style="text-align:center">{{$torcedor->bairro}}</th>
                            <th style="text-align:center">{{$torcedor->cidade}}</th>
                            <th style="text-align:center">{{$torcedor->uf}}</th>
                            <th style="text-align:center">{{$torcedor->telefone}}</th>
                            <th style="text-align:center">{{$torcedor->email}}</th>
                            @if ($torcedor->ativo == 1)
                                <th style="text-align:center"><i class="fas fa-check"></i></th>
                            @else
                                <th style="text-align:center"></th>
                            @endif
                            <td style="text-align:center;">
                                <a href="{{route('torcedores.edit', $torcedor->id)}}"><span class="btn btn-primary" title="Editar"><i class="glyphicon glyphicon-edit"></i></span></a>
                            @if($torcedor->ativo == 1)
                                <a href="" data-target="#modal-desativa-{{$torcedor->id}}" data-toggle="modal"><span class="btn btn-danger" title="Desativar"><i class="glyphicon glyphicon-trash"></i></span></a>
                            @else
                                <a href="" data-target="#modal-ativa-{{$torcedor->id}}" data-toggle="modal"><span class="btn btn-success" title="Ativar"><i class="fas fa-check"></i></span></a>
                            @endif
                            </td>
                        </tr> 
                    @include('admin.modal.modal-ativa')    
                    @include('admin.modal.modal-desativa')       
                    @empty
                        <p>Nenhum Torcedor Cadastrado</p>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div> 

@if( isset($data) )
    {!! $torcedores->appends($data)->links() !!}
@else
    {!! $torcedores->links() !!}
@endif

@stop