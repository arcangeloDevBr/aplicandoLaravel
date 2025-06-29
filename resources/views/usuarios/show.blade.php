@extends('layouts.usuario')

@section('title','Informações do Usuário '.$user->name)

@section('content') 

@if($user->is_admin == 1)
    <div class="alert alert-warning text-dark" role="alert">
        Este usuário é um adminisitrador
    </div>
@endif

<div class="container mt-5">
    <h2 class="mb-4">Informações do Usuário</h2>
    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nome</td>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td>Criada em:</td>
                <td>{{ $user->created_at }}</td>
            </tr>
            <tr>
                <td>Atualizada em:</td>
                <td>{{ $user->updated_at }}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
