<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1>Vagas de emprego!</h1>
    <div class="form">
        <form action="{{route('cadastrar_vaga')}}"method="POST">
            {{ csrf_field() }}
            <div class="input-group">
                <div class="input-box">
                    <label for="firstname">cargo</label>
                    <input id="firstname" type="text" name="cargo" placeholder="Digite o nome do cargo" required>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Remuneração:</label>
                        <input id="firstname" type="text" name="remuneracao" placeholder="Digite o valor da remuneracao" required>
                    </div>
                    <div class="input-group">
                        <div class="input-box">
                            <label for="firstname">Responsabilidades</label>
                            <input id="firstname" type="text" name="responsabilidades" placeholder="Digite as responsabilidades do cargo" required>
                        </div>
                        <div class="input-group">
                            <div class="input-box">
                                <label for="firstname">Exigências</label>
                                <input id="firstname" type="text" name="exigências" placeholder="Digite as exigências para concorrer a vaga" required>
                            </div>
                            <div>
                            <button type="submit" class="btn btn-success">Entrar</button>
                            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
                        </form>
                        <div class="input-group">
                            <div class="input-box">
                        <h2>Listar vagas</h2>
                            </div>
                            <div class="input-group">
                                <div class="input-box">
                        <ul>
                            @foreach ($vagas as $vaga)
                                <li>{{ $vaga->cargo }} - {{ $vaga->remuneracao }}</li>
                            @endforeach
                        </ul>
                    </div>
                            

</body>
</html>