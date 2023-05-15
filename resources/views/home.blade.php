<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Vagas</h1>

    <ul>
        @foreach ($vagas as $vaga)
            <li>
                <h2>{{ $vaga->titulo }}</h2>
                <p>{{ $vaga->descricao }}</p>
                <p>cargo: {{ $vaga->cargo }}</p>
                <p>Remuneração: R$ {{ $vaga->remuneracao }}</p>
                <p>Responsabilidades: {{ $vaga->responsabilidades }}</p>
                <p>exigências: {{ $vaga->exigências }}</p>
                <p>Empresa: {{ $vaga->empresa }}</p>
               
            </li>
        @endforeach
    </ul>
   
</body>
</html>