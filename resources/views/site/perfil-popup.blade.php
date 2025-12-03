@extends('layouts.site')

@section('title', 'perfil Pop-up')

@section('content')
<div class="pop-up-perfil">
        
        <section>
            <label for="name">Nome</label>
            <input type="text" id="name">
            
            <label for="CPF">CPF</label>
            <input type="text" id="CPF">
            
            <label for="email">Email</label>
            <input type="email" id="email">

            <label for="phone">Telefone</label>
            <input type="number" id="phone">

            <button type="button"><img src="/img/exit-icon.png" alt="Sair">Sair</button>
            
            <p>caso deseje você pode <a href="">Deletar sua conta</a></p>
        </section>
    </div>
@endsection
