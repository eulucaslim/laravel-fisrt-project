@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
    <h1>Detalhes do Usuário</h1>
    <x-alert/>
    <ul>
        <li>Nome: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>

    </ul>

{{--    @can('owner', $user)--}}
{{--        pode deletar--}}
{{--    @endcan--}}
    @can('is-admin')
        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit"> Deletar</button>
        </form>
    @endcan
@endsection

