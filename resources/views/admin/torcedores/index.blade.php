@extends('adminlte::page')

@section('content')

<h3>Index</h3>

<div class="class-btn-insert"> </br>
        <a class="btn icon-btn btn-primary" href="{{route('torcedores.teste')}}">
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
            <th style="text-align:center; color:#fff;">E-MAIL</th>
            </thead>
        </tr>

       @forelse($users as $user)
            <tr>
                <th style="text-align:center">{{$user->name}}</th>
                <th style="text-align:center">{{$user->email}}</th>
        @empty
            <p>NENHUM USUÁRIO CADASTRADO</p>
        @endforelse
    </table>
</div>
            </div> <!-- /widget-content -->

        </div> <!-- /widget -->
    </div> <!-- /FIM -->   

@stop