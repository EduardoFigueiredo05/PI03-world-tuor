@extends('layouts.site') {{-- Usamos o mesmo layout para manter o CSS --}}

@section('title', 'Painel Administrativo')

@section('content')

<div class="inner-content-box" style="margin-top: 40px; min-height: 600px;">
    
    <div class="page-header-container">
        <h1 class="page-header-title">Painel Administrativo</h1>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px;">
        
        <a href="{{ route('admin.pacotes.index') }}" style="text-decoration: none;">
            <div class="card-pacotes" style="padding: 40px; text-align: center; border: 1px solid #eee; transition: transform 0.2s;">
                <i class="material-icons" style="font-size: 64px; color: var(--color-brand-blue); margin-bottom: 20px;">flight_takeoff</i>
                <h3 style="margin-bottom: 10px; color: #333;">Gerenciar Pacotes</h3>
                <p>Cadastrar, editar e remover viagens.</p>
            </div>
        </a>

        <a href="{{ route('admin.usuarios.index') }}" style="text-decoration: none;">
            <div class="card-pacotes" style="padding: 40px; text-align: center; border: 1px solid #eee; transition: transform 0.2s;">
                <i class="material-icons" style="font-size: 64px; color: var(--color-success-cta); margin-bottom: 20px;">group</i>
                <h3 style="margin-bottom: 10px; color: #333;">Gerenciar Usuários</h3>
                <p>Ver clientes e criar novos administradores.</p>
            </div>
        </a>

        <div class="card-pacotes" style="padding: 40px; text-align: center; border: 1px solid #eee; opacity: 0.6;">
            <i class="material-icons" style="font-size: 64px; color: gray; margin-bottom: 20px;">list_alt</i>
            <h3 style="margin-bottom: 10px; color: #333;">Reservas (Em breve)</h3>
            <p>Acompanhar pedidos de reserva.</p>
        </div>

    </div>
</div>

@endsection