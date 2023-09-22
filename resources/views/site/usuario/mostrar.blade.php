@extends('tema.site.index')
@section('titulo','Exibir usuario')

@section('conteudo')
@vite(['resources/scss/app.scss', 'resources/js/app.js'])
<x-nav-bar/>
    <h2 class="m-3">Mostrar usuario</h2>
    <div class="m-3">
    <x-input name="nome" placeholder="Nome" value="Andrielly" disabled/>
        
    <x-input name="cpf" placeholder="CPF" value="000.000.000-00" disabled/>
       
    <x-input name="email" placeholder="Email" value="andry@gmail.com" disabled/>
       
    <x-input name="telefone" placeholder="Telefone" value="89865655" disabled/>
        
    <x-input name="endereco" placeholder="Endereço" value="Rua A" disabled/>
</div>
@endsection