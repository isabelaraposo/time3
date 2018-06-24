@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <br/>
                    <a href="{{ url('processo/criar') }}" class="btn btn-success"> Novo </a>
                <div class="panel-body">
            @if ($errors-> any())
                <ul class="alert alert-warning">
            @foreach($errors->all() as $error)
                <li{{ $error }} </li>
            @endforeach
                </ul>
            @endif   
                     <table class="table">
                        <tr>
                          <th>Codigo</th>
                          <th>Descrição</th>
                          <th>Data</th>
                          <th>Situação</th>
                          <th>Assunto</th>
                          <th>Arquivo</th>
                          <th>Unidade</th>

                       </tr>
                        @foreach ($processos as $processo)
                        <tr>
                            <td> {{ $processo->cod_processo }}</td>
                            <td> {{ $processo->descricao }} </td>
                            <td> {{ $processo->data }} </td>
                            <td> {{ $processo->situacao }} </td>
                            <td> {{ $processo->assunto }} </td>
                            <td> {{ $processo->arquivo }} </td>
                            <td> {{ $processo->unidade}} </td>
                            <td> <a href="{{ url('processo/' .$processo->id. '/editar') }}" class="btn btn-primary">Editar</a>
                                <a href="{{ url('processo/' .$processo->id. '/remover') }}" class="btn btn-danger">Excluir</a>
                        </tr>
                        @endforeach
                     </table>
                    
                    {{ $processos->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 