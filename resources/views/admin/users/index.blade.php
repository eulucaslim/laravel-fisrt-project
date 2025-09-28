@extends('admin.layouts.app')
@section('title', 'Listagem dos Usuários')
@section('content')
    <h1>Usuários</h1>

    <a href="{{ route('users.create') }}">Adicionar Novo Usuário</a>

    <x-alert/>

    <table>
        <thead>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </thead>
        <tbody>
        @forelse($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}"> Editar </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100">Nenhum usuário no banco</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{ $users->links() }}
@endsection
