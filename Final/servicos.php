<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>
    <title>K-12 - Serviços</title>
</head>
<body>
    <header id="header">
            <span id="emy_logo">Pixel Zone</span>

            <nav>
            <ul>
                <li><a href="index.php">Home</a></li>    
                <li><a href="atendimento.php">Atendimento</a></li>
                <li><a href="cliente.php">Cliente</a></li>
                <li><a href="servicos.php">Serviços</a></li>
            </ul>
        </nav>

            <span id="login">Bem-vinda, <h5> Pixel Zone</h5></span>
    </header>


        <div id="emys1" class="container">
            <div id="k12">
                <img src="imgs/logo.png" alt="">
            </div>
        <?php
            include("conexao.php");

            if (mysqli_connect_errno() <> 0) {
                $msg = mysqli_connect_error($c);
                echo "Erro na conexão SQL!"."<br>";
                echo "O MySQL retornou a seguinte mensagem:".$msg."<br>";
            } else { //Inserir, atualizar e deletar dados.

                    //Inserir Dados
                    $result = mysqli_query($c, "INSERT INTO servico (qual_servico, cod_servico)VALUES
                                                            ('Compra e troca de pneu', 1111111),
                                                            ('Radiador quebrado - compra e troca', 2222222),
                                                            ('Troca de óleo', 3333333),
                                                            ('Compra e troca dos parabrisas', 4444444),
                                                            ('Vidro quebrado - compra e troca', 5555555)");
                    if ($result == true) {
                        echo "Dados inseridos com sucesso!!";
                    }
                        else{
                        $msg = mysqli_error($c);
                        echo "Não foi possível inserir dados. Mensagem de erro: ".$msg."<br>";
                    }

                    //Atualizar Dados
                    $result = mysqli_query($c, "UPDATE servico SET qual_servico='Concerto de marcha' WHERE cod_servico = 1111111;");
                    if ($result == true) {
                        echo "Dados atualizados com sucesso!!". "<br>";
                    }
                        else{
                        $msg = mysqli_error($c);
                        echo "Não foi possível atualizar dados. Mensagem de erro: ".$msg."<br>";
                    }

                    // Deletar Dados
                    // $result = mysqli_query($c, "DELETE From servico WHERE cod_servico = 3333333;");
                    // if ($result == true) {
                    //     echo "Dados deletados com sucesso!!";
                    // }
                    //     else{
                    //     $msg = mysqli_error($c);
                    //     echo "Não foi possível deletar dados. Mensagem de erro: ".$msg."<br>";
                    // };
                };

            //Selecionar TODOS os Dados e mostrar na página.
            // $sql =  "SELECT * FROM servico";
            // $result = mysqli_query($c, $sql);
            // if(mysqli_num_rows($result) > 0)
            // {
            // echo '<table> <tr> <th> Serviço </th> <th> Código do Serviço </th> </tr>';
            // while($row = mysqli_fetch_assoc($result)){
            //     echo '<tr >
            //     <td>' . $row["qual_servico"] . '</td>
            //     <td> ' . $row["cod_servico"] . '</td>
            //     </tr>';
            // }
            // echo '</table>';
            // }
            // else
            // {
            //     echo "0 results";
            // }

            //Selecionar os Dados com a chave primária e mostrar na página.
            // $sql =  "SELECT * FROM servico WHERE cod_servico = 1111111";
            // $result = mysqli_query($c, $sql);
            // if(mysqli_num_rows($result) > 0)
            // {
            // echo '<table> <tr> <th> Serviço </th> <th> Código do Serviço </th> </tr>';
            // while($row = mysqli_fetch_assoc($result)){
            //     echo '<tr >
            //     <td>' . $row["qual_servico"] . '</td>
            //     <td> ' . $row["cod_servico"] . '</td>
            //     </tr>';
            // }
            // echo '</table>';
            // }
            // else
            // {
            //     echo "0 results";
            // }

            //Selecionar os Dados com uma cláusula WHERE e um AND e mostrar na página.
            // $sql =  "SELECT * FROM servico WHERE qual_servico = 'Troca de óleo' OR cod_servico = 5555555";
            // $result = mysqli_query($c, $sql);
            // if(mysqli_num_rows($result) > 0)
            // {
            // echo '<table> <tr> <th> Serviço </th> <th> Código do Serviço </th> </tr>';
            // while($row = mysqli_fetch_assoc($result)){
            //     echo '<tr >
            //     <td>' . $row["qual_servico"] . '</td>
            //     <td> ' . $row["cod_servico"] . '</td>
            //     </tr>';
            // }
            // echo '</table>';
            // }
            // else
            // {
            //     echo "0 results";
            // }
        ?>
    </div>
</body>
</html>