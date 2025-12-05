@extends('layouts.site')

@section('title', 'Adicionar Pacote - Word Tour ADM')

@section('content')


    <div class="page-header-container">
        <a href="{{ route('admin.dashboard') }}" class="admin-back-button">&#8592;</a> 
        <h2 class="page-header-title">Adicionar Pacote</h2>
    </div>

    <main class="admin-form-container">
        
        <form class="admin-form" action="#" method="POST">
            <div class="form-group">
                <label class="form-label" for="nome_pacote">Nome do Pacote</label>
                <input class="form-input" type="text" id="nome_pacote" name="nome_pacote">
            </div>

            <div class="form-group">
                <label class="form-label" for="subtitulo">Subtítulo</label>
                <input class="form-input" type="text" id="subtitulo" name="subtitulo">
            </div>

            <div class="form-group">
                <label class="form-label" for="dias">Quantidade de dias</label>
                <input class="form-input" type="number" id="dias" name="dias">
            </div>

            <div class="form-group">
                <label class="form-label" for="preco">Preço</label>
                <input class="form-input" type="text" id="preco" name="preco" placeholder="R$">
            </div>

            <div class="form-group">
                <label class="form-label" for="noites">Quantidade de Noites</label>
                <input class="form-input" type="number" id="noites" name="noites">
            </div>

            <div class="form-group">
                <label class="form-label" for="categorias">Categorias</label>
                <select class="form-select" id="categorias" name="categorias">
                    <option value="">Selecione uma categoria</option>
                    <option value="europa">Europa</option>
                    <option value="asia">Ásia</option>
                    <option value="america">América</option>
                </select>
            </div>

            <div class="form-group form-group--full-width">
                <label class="form-label" for="descricao">Texto descritivo principal</label>
                <textarea class="form-textarea" id="descricao" name="descricao"></textarea>
            </div>

            <div class="form-group form-group--full-width">
                <label class="form-label" for="info_gerais">Informações gerais</label>
                <input class="form-input" type="text" id="info_gerais" name="info_gerais">
            </div>
            
            <div class="form-group form-group--full-width">
                <label class="form-label" for="pontos_turisticos">Pontos turísticos</label>
                <input class="form-input" type="text" id="pontos_turisticos" name="pontos_turisticos">
            </div>
            
            <div class="form-group form-group--full-width">
                <label class="form-label" for="gastronomia">Gastronomia</label>
                <input class="form-input" type="text" id="gastronomia" name="gastronomia">
            </div>
            
            <div class="form-group form-group--full-width">
                <label class="form-label" for="vida_noturna">Vida noturna</label>
                <input class="form-input" type="text" id="vida_noturna" name="vida_noturna">
            </div>
            
            <div class="form-group form-group--full-width">
                <label class="form-label" for="condicoes_gerais">Condições gerais</label>
                <input class="form-input" type="text" id="condicoes_gerais" name="condicoes_gerais">
            </div>

            <div class="form-group form-group--full-width">
                <label class="form-label" for="img_principal">Imagem Principal</label>
                <textarea class="form-textarea form-textarea--large" id="img_principal" name="img_principal" placeholder="Cole a URL da imagem aqui..."></textarea>
            </div>
            
            <div class="form-group form-group--full-width">
                <label class="form-label" for="img_carrossel">Imagens do Carrossel</label>
                <textarea class="form-textarea form-textarea--large" id="img_carrossel" name="img_carrossel" placeholder="Cole as URLs das imagens, separadas por vírgula..."></textarea>
            </div>
            
            <div class="admin-form-submit">
                <button type="submit" class="btn btn--success">Salvar</button>
            </div>

        </form>
    </main>

    
  
@endsection
