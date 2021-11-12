<?php
    echo "Seu nome foi alterado para:" . $_POST["novoNome"] . "<br>";
    echo "Login foi alterado para:" . $_POST["novoLogin"] . "<br>";
    echo "Sua senha foi alterada para:" . $_POST["novaSenha"] . "<br>";
    echo "Seu email foi alterado para:" . $_POST["novoEmail"] . "<br>";  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização OK</title>
</head>
<body>
    <h4>Seus dados foram atualizados com sucesso!</h4>
    <a href="home.php">
   <input type="button" value="OK" />
</a>
</body>
</html>