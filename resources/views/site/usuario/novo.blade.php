<!DOCTYPE html>
@extends('tema.site.index')
@section('titulo','Cadastro de usuarios')

@section('conteudo')
@vite(['resources/scss/app.scss', 'resources/js/app.js'])
<x-nav-bar/>


    <h2 class="m-3">Novo usuario</h2>
    <form method="post" class="container">
    
        <x-input name="nome" placeholder="Nome" />
        
        <x-input name="cpf" placeholder="CPF" />
       
        <x-input name="email" placeholder="Email" />
       
        <x-input name="telefone" placeholder="Telefone" />
        
        <x-input name="endereco" placeholder="Endereço" />
        {{ csrf_field() }}
        <x-button></x-button>
    </form>
@endsection