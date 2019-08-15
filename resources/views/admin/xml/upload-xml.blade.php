@extends('adminlte::page')

@section('content')

{!! Form::open(['route' => 'torcedores.uploadXml', 'class' => 'form form-search form-ds', 'enctype' => 'multipart/form-data']) !!}

<h3 class="text-center">Upload do arquivo XML</h3>

<div class="row">
    <div class="col-md-12">
        <div class="form-group form-group col-md-8">
            <label>Upload:</label>
            <input type="file" name="xml" class="form-control" required>
        </div>
    </div>
</div>

<div class="form-group col-md-12">
    <button class="btn btn-labeled btn-success"> <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span> Salvar </button> 
</div>

{!! Form::close() !!}

@stop