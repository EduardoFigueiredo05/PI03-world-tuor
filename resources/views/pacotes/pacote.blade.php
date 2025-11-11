<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pacotes World Tour</title>
</head>
<body>
    <h1>Pacotes de Viagem</h1>

    @if($pacotes->isEmpty())
        <p>Nenhum pacote disponível no momento.</p>
    @else
        <ul>
            @foreach($pacotes as $pacote)
                <li>
                    <h2>{{ $pacote->nome }}</h2>
                    <p><strong>{{ $pacote->continente }}</strong> - {{ $pacote->pais }}</p>
                    <p>{{ $pacote->descricao }}</p>
                    <p>Preço: R$ {{ number_format($pacote->preco, 2, ',', '.') }}</p>
                    <p>Datas: {{ $pacote->data_inicio }} a {{ $pacote->data_fim }}</p>
                </li>
            @endforeach
        </ul>
    @endif

</body>
</html>