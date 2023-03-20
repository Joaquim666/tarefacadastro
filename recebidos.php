<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebidos</title>
</head>
<body>
    <h1>Dados Recebidos</h1>
    <p><b>Nome Completo recebido foi: </b><?php echo $_GET["nome"]; ?> </p>
    <p><b>Email recebido foi: </b><?php echo $_GET["email"]; ?> </p>
    <p><b>Senha recebido foi: </b><?php echo $_GET["senha"]; ?> </p>
    <p><b>Data de Nascimento recebido foi: </b><?php echo $_GET["datadenascimento"]; ?> </p>
    <p><b>CPF recebido foi: </b><?php echo $_GET["cpf"]; ?> </p>
    <p><b>Cidade recebido foi: </b><?php echo $_GET["cidade"]; ?> </p>
    <p><b>CEP recebido foi: </b><?php echo $_GET["cep"]; ?> </p>
    <p><b>Estado recebido foi: </b><?php echo $_GET["estado"]; ?> </p>
    <p><b>País recebido foi: </b><?php echo $_GET["pais"]; ?> </p>
    <a href="index.php">Voltar : form.php</a>
    
</body>
</html>