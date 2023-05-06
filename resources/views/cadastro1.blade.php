<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="estilo-cadastro.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap-reboot.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body> <div class="container">

  <div class="form">
      <form action="{{ route('cadastrar_empresa')}}"method="POST">
        {{ csrf_field() }}
          <div class="form-header">
              <div class="title">
                  <h1>Cadastre sua Empresa</h1>
              </div>
              <div class="login-button">
                  
              </div>
          </div>
<
          <div class="input-group">
              <div class="input-box">
                  <label for="firstname">Nome da Empresa</label>
                  <input id="firstname" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
            <br /> 
                </div>
                <div class="input-group">
              <div class="input-box">
                  <label for="lastname">Cnpj</label>
                  <input id="lastname" type="number" name="cnpj" placeholder="Digite seu sobrenome" required>
                  <br /> 
                </div>
              <div class="input-group">
                <div class="input-box">
                  <label for="email">E-mail</label>
                  <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
              
                </div>
                <div class="input-group">
              <div class="input-box">
                <label for="number">Endereço</label>
                <input id="number" type="text" name="endereco" placeholder="" required>
                
            </div>
            <div class="input-group">
              <div class="input-box">
                  <label for="password">Senha</label>
                  <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                  
                </div>


                <div class="input-group">
                  <div class="input-box">
              <button type="submit" class="btn btn-success">Entrar</button>
              <button><a href="login">login</a></button>
          </div>
        </div>

         
            

      </form>
  </div>
</div>
<div class="input-group">
  <div class="input-box">
<h2>Empresas Cadastradas:</h2>
</div>
<div class="input-group">
  <div class="input-box">
<ul>
  @foreach ($cadastros as $cadastro)
      <li>{{ $cadastro->nome }} - {{ $cadastro->senha }}</li>
  @endforeach
</ul>
</div>
  
</body>
</html>