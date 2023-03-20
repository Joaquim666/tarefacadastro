<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pks.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastre-se</h1>
<form action="recebidos.php" method="get">
<div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome Completo</label>
        <input name="nome" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Senha</label>
        <input name="senha" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Data de Nascimento</label>
        <input name="datadenascimento" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">CPF</label>
        <input name="cpf" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Cidade</label>
        <input name="cidade" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">CEP</label>
        <input name="cep" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Estado</label>
        <input name="estado" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">País</label>
        <input name="pais" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Concorda com os termos</label>
  </div>
  <button type="submit" class="btn btn-primary">enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>