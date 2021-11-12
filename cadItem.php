<html>
    <head>
        <title>
            Titulo Teste
        </title>
    </head>
    <body>
        <p>teste</p>

        <?php

require '../modelo/Cliente.php';
require_once '../modelo/Carro.php';

class Principal
{
    public static function main($dados)
    {
        $veiculos = [];
        $veiculos[] = new Carro($dados['placa'], $dados['modelo'], $dados['ano'], $dados['fabricante'], $dados['cor']);

        $cliente = new Cliente($dados['cpf'], $dados['nome'], $dados['endereco'], $dados['fone'], $dados['email'], $veiculos);
        echo "<pre>";
        print_r($cliente);
    }

    
}

Principal::main($_POST)

?>


        Item Emprestado: <?php echo $_POST[itemEmprestado];  ?>.<br />
        Data Empréstimo: <?php echo $_POST[dataEmprestimo];  ?>.<br />
        Quem Emprestou: <?php echo $_POST[quemEmprestou];  ?>.<br />
        Data Devolução: <?php echo $_POST[dataDevolucao];  ?>.<br />
        
        <p>aqui tmb é html!</p>
    </body>
</html>


