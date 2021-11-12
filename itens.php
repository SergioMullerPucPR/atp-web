<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>ATP - WEB</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- importando arquivos CSS -->
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="header">
            <h1>Controle de Empréstimos</h1>
            <h2>Uma forma simples de saber pra quem você emprestou e quando deverá lhe devolver.</h2>
        </div>
        <div class="navbar">
            <nav>
            <a href="home.php">Início</a>
            <a href="itens.php" class="active">Itens</a>
            <a href="config-user.php" class="right">Usuário</a>
            </nav>
        </div>
        <div class="row">
            <div class="main">  
                <h3>Item que será emprestado</h3>
                <form action="./itemCadastro.php" method="post">     
                    <div class="grid-container">
                        <div>Item:</div>
                        <div><input type="text" class="infoCadastrar" placeholder=" O que está sendo emprestado" id="itemEmprestado" name="itemEmprestado"></div>
                        <div>Data Empréstimo:</div>  
                        <div><input type="datetime" class="infoCadastrar" placeholder=" Data do Empréstimo" id="dataEmprestimo" name="dataEmprestimo"></div>
                        <div>Quem está emprestando:</div>
                        <div><input type="text" class="infoCadastrar" placeholder=" Pra quem está sendo emprestado" id="quemEmprestou" name="quemEmprestou"></div>  
                        <div>Data da devolução:</div>
                        <div><input type="text" class="infoCadastrar" placeholder=" Data da Devolução" id="dataDevolucao" name="dataDevolucao"></div>
                        <div><input type="submit" class="botaoCadastrar" value="Cadastrar"></div>
                    </div>
                </form>
            </div>
        </div>

        <div class="footer">
            <h2>Powered by Sergio Müller. All rights reserved.</h2>
        </div>
          


    </body>
</html>