<?php
    echo "Dados Enviados via POST<br>";
    var_dump($_POST);
    echo "<br>";
    echo "Login: " . $_POST["login"] . "<br>";
    echo "Senha: " . $_POST["senha"] . "<br>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login OK</title>
</head>
<body>
    <h4>Login realizado com sucesso</h4>
    <a href="home.php">
   <input type="button" value="OK" />
</a>
</body>
</html>