@extends('adminlte::page')

@section('content')

    {!! Form::open(['route' => 'torcedores.uploadXml', 'class' => 'form form-search form-ds', 'enctype' => 'multipart/form-data']) !!}

<h3 class="text-center">Upload do arquivo XML</h3>

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
                            <label>Upload:</label>
                            <input type="file" name="xml" class="form-control" required>
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

@stop