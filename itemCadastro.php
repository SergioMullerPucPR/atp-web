<?php
echo "Form enviado com sucesso ! <br><br>";
echo "Item Emprestado: " . $_POST["itemEmprestado"] . "<br>";
echo "Data do Empréstimo: " . $_POST["dataEmprestimo"] . "<br>";
echo "Pra quem emprestou: " . $_POST["quemEmprestou"] . "<br>";
echo "Data da devolução: " . $_POST["dataDevolucao"] . "<br>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo Cadastrado</title>
</head>
<body>
    <h4>O empréstimo foi cadastrado com sucesso!</h4>
    <a href="home.php">
   <input type="button" value="OK" />
</a>
</body>
</html>