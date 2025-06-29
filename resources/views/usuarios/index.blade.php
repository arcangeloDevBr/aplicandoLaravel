@extends('layouts.usuario')

@section('title','Usuários')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Usuários</h2>
    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $usuario)
                <tr>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>
                        <a href="./{{ $usuario->id }}" target="_blank" class="btn btn-sm btn-warning">Visualizar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection