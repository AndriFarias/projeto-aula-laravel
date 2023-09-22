@extends('tema.site.index')
@section('titulo','Editar usuario')

@section('conteudo')
@vite(['resources/scss/app.scss', 'resources/js/app.js'])
<x-nav-bar/>
    <h2 class="m-3">Editar usuario</h2>
    <form method="post" class="container">
        <x-input name="nome" placeholder="Nome" value="Andrielly"/>
        
        <x-input name="cpf" placeholder="CPF" value="000.000.000-00"/>
       
        <x-input name="email" placeholder="Email" value="andry@gmail.com"/>
       
        <x-input name="telefone" placeholder="Telefone" value="89865655"/>
        
        <x-input name="endereco" placeholder="Endereço" value="Rua A"/>
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        <x-button-editar></x-button>
    </form>
@endsection