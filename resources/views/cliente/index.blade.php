@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Clientes</div>

                <div class="panel-body">
                <p>
                        <a class="btn btn-info" href="{{route('cliente.adicionar')}}">Adicionar</a>
                    </p>
                <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Endereço</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)

                            <tr>
                                <th scope="row">{{ $cliente->id }}</th>
                                <td>{{ $cliente->name }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->endereco }}</td>
                                <td>
                                    <a class="btn btn-default" href="#">Detalhe</a>
                                    <a class="btn btn-default" href="#">Editar</a>
                                    <a class="btn btn-danger" href="#">Deletar</a>
                                </td>
                            </tr>                            

                            @endforeach
                            
                        </tbody>
                        
                    </table>

                    <div align="center">
                        {!! $clientes->links() !!}
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
