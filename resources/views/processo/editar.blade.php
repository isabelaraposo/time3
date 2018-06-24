@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
            @if ($errors-> any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                <li>{{ $error }} </li>
                @endforeach
            </ul>
            @endif
            <form action="{{ url('processo/salvar') }}" method="post">
                {{ csrf_field() }}
                <div class="input-group">
                    
                  
                    <label>Codigo:</label>
                    <input type="text" class="test-primary" name="cod_processo" >
                    <br/>
                    <label>Descrição:</label>
                    <input type="text" class="test-primary" name="descricao" >
                    <br/>
                    <label>Data:</label>
                    <input type="text" class="test-primary" name="data" >
                    <br/>
                    <label>Situação:</label>
                    <input type="text" class="test-primary" name="situacao" >
                    <br/>
                    <label>Assunto:</label>
                    <input type="text" class="test-primary" name="assunto" >
                    <br/>
                    <label>Arquivo:</label>
                    <input type="text" class="test-primary" name="arquivo" >
                    <br/>
                    <label>Unidade:</label>
                    <input type="text" class="test-primary" name="unidade" >
                    <br/>
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="{{ url('processo/listar') }}" class="btn btn-danger">Desistir</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection