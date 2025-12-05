@extends('layouts.site')

@section('title', 'Editar Pacote - Word Tour ADM')

@section('content')


    <div class="page-header-container">
        <a href="{{ route('admin.dashboard') }}" class="admin-back-button">&#8592;</a> 
        <h2 class="page-header-title">Editar Pacote</h2>
    </div>

    <main class="admin-form-container">
        
        <form class="admin-form" action="#" method="POST">

            <div class="form-group form-group--full-width">
                <label class="form-label" for="nome_pacote">Nome do Pacote</label>
                <input class="form-input" type="text" id="nome_pacote" name="nome_pacote" value="Marrocos">
            </div>

            <div class="form-group form-group--full-width">
                <label class="form-label" for="categoria">Categoria</label>
                <input class="form-input" type="text" id="categoria" name="categoria" value="África">
            </div>
            
            <div class="form-group form-group--full-width">
                <label class="form-label" for="preco">Preço</label>
                <input class="form-input" type="text" id="preco" name="preco" value="2.862,07">
            </div>
            
            <div class="form-group form-group--full-width">
                <label class="form-label" for="data_ida">Data de Ida</label>
                <input class="form-input" type="text" id="data_ida" name="data_ida" value="20/05/2026">
            </div>

            <div class="form-group form-group--full-width">
                <label class="form-label" for="data_volta">Data de Volta</label>
                <input class="form-input" type="text" id="data_volta" name="data_volta" value="27/05/2026">
            </div>

            <div class="form-group form-group--full-width">
                <label class="form-label" for="img_principal">Imagem Principal</label>
                <div class="form-image-preview-wrapper">
                    <img class="form-image-preview" src="assets/images/placeholder1.jpg" alt="Preview Imagem Principal">
                </div>
            </div>
            
            <div class="form-group form-group--full-width">
                <label class="form-label" for="img_carrossel">Imagens do Carrossel</label>
                <div class="form-image-preview-wrapper">
                    <img class="form-image-preview" src="assets/images/placeholder2.jpg" alt="Preview Carrossel 1">
                    <img class="form-image-preview" src="assets/images/placeholder3.jpg" alt="Preview Carrossel 2">
                    <img class="form-image-preview" src="assets/images/placeholder4.jpg" alt="Preview Carrossel 3">
                </div>
            </div>

            <div class="form-group form-group--full-width">
                <label class="form-label" for="subtitulo">Subtítulo</label>
                <input class="form-input" type="text" id="subtitulo" name="subtitulo" value="Tour Norte da África – Cidades Imperiais">
            </div>
            
            <div class="form-group form-group--full-width">
                <label class="form-label" for="descricao">Texto descritivo principal</label>
                <input class="form-input" type="text" id="descricao" name="descricao" value="Imagine-se caminhando pelas ruelas de uma medina medieval...">
            </div>
            <div class="form-group form-group--full-width">
                <label class="form-label" for="info_gerais">Informações gerais</label>
                <input class="form-input" type="text" id="info_gerais" name="info_gerais" value="Os valores serão convertidos no câmbio do dia de pagamento...">
            </div>
            <div class="form-group form-group--full-width">
                <label class="form-label" for="pontos_turisticos">Pontos turísticos</label>
                <input class="form-input" type="text" id="pontos_turisticos" name="pontos_turisticos" value="O 1º Dia Madri - Cáceres - Sevilha">
            </div>
            <div class="form-group form-group--full-width">
                <label class="form-label" for="gastronomia">Gastronomia</label>
                <input class="form-input" type="text" id="gastronomia" name="gastronomia" value="Pão com ovo">
            </div>
            <div class="form-group form-group--full-width">
                <label class="form-label" for="vida_noturna">Vida noturna</label>
                <input class="form-input" type="text" id="vida_noturna" name="vida_noturna" value="Baladas, bares,">
            </div>
            <div class="form-group form-group--full-width">
                <label class="form-label" for="condicoes_gerais">Condições gerais</label>
                <input class="form-input" type="text" id="condicoes_gerais" name="condicoes_gerais" value="Os valores serão convertidos no câmbio do dia de pagamento...">
            </div>
            
            <div class="admin-form-submit">
                <button type="submit" class="btn btn--success">Salvar</button>
            </div>

        </form>
    </main>

    
@endsection
