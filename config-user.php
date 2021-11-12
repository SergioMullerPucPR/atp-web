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
            <a href="php.php">Início</a>
            <a href="itens.php">Itens</a>
            <a href="config-user.php" class="rightAct">Usuário</a>
            </nav>
        </div>
        <div class="row">
            <div class="main">  
                <h3>Atualizar seu cadastro</h3>
                <form action="cad_user.php" method="post">
                    <div class="grid-container">
                        <div>Seu nome:</div>
                        <div><input type="text" class="infoCadastrar" placeholder=" Atualizar seu nome" name="novoNome"></div>
                        <div>Login:</div>  
                        <div><input type="datetime" class="infoCadastrar" placeholder=" Alterar Login" name="novoLogin"></div>
                        <div>Senha:</div>
                        <div><input type="text" class="infoCadastrar" placeholder=" Alterar Senha" name="novaSenha"></div>  
                        <div>Email:</div>
                        <div><input type="email" class="infoCadastrar" placeholder=" Alterar Email" name="novoEmail"></div>
                        <div><input type="submit" class="botaoCadastrar" value="Atualizar"></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
            <h2>Powered by Sergio Müller. All rights reserved.</h2>
        </div>
    </body>
</html>