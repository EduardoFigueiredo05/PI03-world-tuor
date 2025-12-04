@extends('layouts.site')

@section('title', 'Pacote Clicado')

@section('content')


<section class="section-img-pacote">
    <div class="imgs-blocks">
        <div class="img-overlay-pacotes">
            <img class="img-block-1-pacotes" src="https://images.unsplash.com/photo-1588272947922-21cbc34dc3a7?q=80&w=1470&auto=format&fit=crop" alt="">
        </div>
        
        <div class="imgs-block-2">
            <div class="img-overlay-pacotes">
                <img class="img-block-2-pacotes" src="https://images.unsplash.com/photo-1603015245012-68988952fc73?q=80&w=1470&auto=format&fit=crop" alt="">
            </div>
            
            <div class="img-overlay-pacotes">
                <img class="img-block-2-pacotes" src="https://images.unsplash.com/photo-1678806922638-27bf485490ae?q=80&w=1631&auto=format&fit=crop" alt="">
            </div>
        </div>
    </div>
    <div>
        <h1 class="hero-title-secndary">{{$pacote->nome}}</h1>
    </div>
</section>

<section class="section-pacote-infs">
    <p><i class="material-icons">star</i> Avaliações</p>

    <p><i class="material-icons">star</i> / dias / noites</p>

    <p>{{$pacote->descricao}}</p>

    <div class="section-pacote-infs-button">
        <button>Intinerário</button>
        <button>Oque inclui</button>
        <button>Condições gerais</button>
    </div>

    <section class="Intinerario">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum laborum velit reiciendis quasi itaque, architecto repudiandae exercitationem deleniti iste labore eveniet ratione ab aspernatur accusamus. Ea odio culpa perferendis molestias.</p>
    </section>

    <section class="Oque-inclui">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum laborum velit reiciendis quasi itaque, architecto repudiandae exercitationem deleniti iste labore eveniet ratione ab aspernatur accusamus. Ea odio culpa perferendis molestias.</p>
    </section>

    <section class="Condicoes-gerais">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum laborum velit reiciendis quasi itaque, architecto repudiandae exercitationem deleniti iste labore eveniet ratione ab aspernatur accusamus. Ea odio culpa perferendis molestias.</p>
    </section>
</section>

<section class="reserve-now">
    <h2>Reserve agora sua viagem!</h2>

    <P>R$ {{$pacote->preco}}</P>

    <p>Por pessoa</p>

    <button type="button">Reservar agora</button>

    <p><i class="material-icons">check</i>Cancelamento Grátis (até 7 dias antes da viagem)</p>
    <p><i class="material-icons">chat</i>Fale com um especialista</p>

</section>


<script>
    // Controle de abas da seção de informações
    document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.querySelectorAll('.section-pacote-infs-button button');
        const sections = {
            'Intinerário': document.querySelector('.Intinerario'),
            'Oque inclui': document.querySelector('.Oque-inclui'),
            'Condições gerais': document.querySelector('.Condicoes-gerais')
        };

        // Mostra a primeira aba por padrão
        sections['Intinerário'].classList.add('active');
        buttons[0].classList.add('active');

        buttons.forEach((button, index) => {
            button.addEventListener('click', () => {
                // Remove active de todos
                buttons.forEach(btn => btn.classList.remove('active'));
                Object.values(sections).forEach(section => section.classList.remove('active'));

                // Adiciona active no clicado
                button.classList.add('active');
                Object.values(sections)[index].classList.add('active');
            });
        });
    });
</script>
@endsection
