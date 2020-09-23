@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Clientes</div>

                <div class="panel-body">
                    View da Lista de Clientes!
                @foreach($clientes as $cliente)
                <li>{{$cliente->name}}</li>
                @endforeach
                <div align="center">
                {!! $clientes->links() !!}
                </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
