@extends('tema.site.index')  {{-- Estende o layout da página --}}
@section('titulo', 'Lista de usuários')  {{-- Define o título da página --}}
@section('conteudo')  {{-- Define o conteúdo da página --}}

    {{-- Inclui recursos Vite para SCSS e JS --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    {{-- Inclui o componente de barra de navegação --}}
    <x-nav-bar />

    {{-- Título da página --}}
    <h1 class="m-3">Lista de usuários</h1>

    {{-- Lista ordenada de usuários --}}
    <ol class="list-group list-group-numbered m-3">
        @foreach($usuarios as $usuario)
            <li class="list-group-item">Nome: {{ $usuario['nome'] }}, Telefone: {{ $usuario['telefone'] }}</li>
        @endforeach
    </ol>

    {{-- Lista horizontal de números --}}
    <ul class="list-group list-group-horizontal m-3">
        @for ($i = 0; $i < 5; $i++)
            <li class="list-group-item">O número agora é {{ $i }}</li>
        @endfor
    </ul>

    {{-- Condição para exibir alerta --}}
    @if (count($usuarios) === 1)
        <div class="alert alert-warning m-3" role="alert">Tem só um usuário!</div>
    @elseif (count($usuarios) > 1)
        <div class="alert alert-warning m-3" role="alert">Tem vários usuários!</div>
    @else
        <div class="alert alert-warning m-3" role="alert">Não tem nenhum usuário!</div>
    @endif

 
    {{-- Exibe uma mensagem com base na condição de idade --}}
    {{ $idade >= 18 ? 'Maior de idade.' : 'Menor de idade.' }}

    


@endsection
