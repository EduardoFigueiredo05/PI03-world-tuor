@extends('layouts.site')

@section('title', 'Adicionar Categoria - Word Tour ADM')

@section('content')


    <div class="page-header-container">
        <a href="{{ route('admin.dashboard') }}" class="admin-back-button">&#8592;</a> 
        <h2 class="page-header-title">Adicionar Categoria</h2>
    </div>

    <main class="admin-form-container">
        
        <form class="admin-form" action="#" method="POST">

            <div class="form-group form-group--full-width">
                <label class="form-label" for="nome_categoria">Nome da categoria</label>
                <input class="form-input" type="text" id="nome_categoria" name="nome_categoria">
            </div>

            <div class="form-group form-group--full-width">
                <label class="form-label" for="descricao_categoria">Descrição da categoria Categoria</label>
                <input class="form-input" type="text" id="descricao_categoria" name="descricao_categoria">
            </div>

            <div class="form-group form-group--full-width">
                <label class="form-label" for="img_categoria">Imagem da categoria</label>
                <textarea class="form-textarea form-textarea--large" id="img_categoria" name="img_categoria" placeholder="Cole a URL da imagem aqui..."></textarea>
            </div>
            
            <div class="admin-form-submit">
                <button type="submit" class="btn btn--success">Salvar</button>
            </div>

        </form>
    </main>

    
  
@endsection
