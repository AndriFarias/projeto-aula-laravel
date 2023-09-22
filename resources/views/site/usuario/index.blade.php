@extends('tema.site.index')
@section('titulo', 'Lista de usuários')

@section('conteudo')
@vite(['resources/scss/app.scss', 'resources/js/app.js'])
<x-nav-bar />

<h1 class="m-3">Lista de usuários</h1>

<ol class="list-group list-group-numbered m-3">
@foreach($usuarios as $usuario)
<li class="list-group-item">Nome: {{ $usuario['nome'] }}, Telefone: {{ $usuario['telefone'] }}</li>
@endforeach
</ol>

<ul class="list-group list-group-horizontal m-3">

@for ($i = 0; $i < 5; $i++)
<li class="list-group-item">O número agora é {{ $i }}</li>
@endfor
</ul>

@if (count($usuarios) === 1)
<div class="alert alert-warning m-3" role="alert">Tem só um usuário!</div>
@elseif (count($usuarios) > 1)
<div class="alert alert-warning m-3" role="alert">Tem vários usuários!</div>
@else
<div class="alert alert-warning m-3" role="alert">Não tem nenhum usuário!</div>
@endif

{{-- Comentário --}}

{{ $idade >= 18 ? 'Maior de idade.' : 'Menor de idade.' }}

@endsection