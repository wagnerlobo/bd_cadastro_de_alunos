<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   <script src="script.js"></script>
    <title>Formulário</title>
</head>
<body >
   
<form action="formulario.php" method="POST">
<div class="tela-login">
    <h1>Login</h1>        
        <input type="text" name="nome" id="nome">
        <label for="nome">Nome</label>
        <br><br>
        <input type="text" name="email" id="email">
        <label for="nome">Email</label>
        <br><br>
        <input type="tel" name="telefone" id="tel">
        <label for="telefone">Telefone</label>
        <br><br>
       <!-- teste de envio para conexão com o bd  
        <input type="password" placeholder="Senha">
        <br><br> -->
        <input type="submit" placeholder="Enviar">
       </div>
  
</form>   
</body>
</html>