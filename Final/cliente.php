<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Zone</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/headerStyle.js" defer></script>
    <script src="https://unpkg.com/scrollreveal@4"></script>
    <script src="js/scrollReveal.js" defer></script>
</head>
<body>
<header id="header">
        <span id="logo">Pixel Zone</span>

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>    
                <li><a href="atendimento.php">Atendimento</a></li>
                <li><a href="cliente.php">Cliente</a></li>
                <li><a href="servicos.php">Serviços</a></li>

            </ul>
        </nav>


        <h5 id="login">Pixel Zone</h5>
    </header>
    <main class="container" id="fillips1">
        <?php   

            include("conexao.php");
    
            //! Inserir Dados

            if(mysqli_num_rows(mysqli_query($c, "SELECT * FROM cliente")) == 0){
                
                $result = mysqli_query($c, "INSERT INTO cliente(nome, cpf, celular, cod_protocolo, cod_veiculo) VALUES
                ('Fillip Mangia', 76587336019, 63999507631, 5000001, 121212),
                ('Emily Rharysa', 47394489043, 79975469387, 5000002, 232323),
                ('Anna Luiza', 04930865018, 98968434774, 5000003, 343434),
                ('Pedro Hipólito', 92123067059, 83968518316, 5000004, 454545),
                ('Manuelle Morais', 86104391001, 64981753083, 5000005, 565656);");

                $result = mysqli_query($c, "UPDATE cliente SET nome='Anna Luisa' WHERE cod_protocolo = 5000003;");

                //! Deletar Dados
                // $result = mysqli_query($c, "DELETE From cliente WHERE cod_protocolo = 5000005;");

                
            }
        

            //! Mostrar Dados
            $sql =  "SELECT * FROM cliente";
            
            
            $result = mysqli_query($c, $sql);
            if(mysqli_num_rows($result) > 0){
                echo
                '<table>
                    <tr>
                        <th> Nome </th>
                        <th> CPF </th>
                        <th> Celular </th>
                        <th> Código do Protocólo </th>
                        <th> Código do veículo </th>
                    </tr>';
                while($row = mysqli_fetch_assoc($result)){
                    echo '<tr >
                    <td>' . $row["nome"] . '</td>
                    <td> ' . $row["cpf"] . '</td>
                    <td>' . $row["celular"] . '</td>
                    <td> ' . $row["cod_protocolo"] . '</td>
                    <td>' . $row["cod_veiculo"] . '</td>
                    </tr>';
                }
                echo '</table>';
            }
            else{
                echo "0 results";
            }
        ?>
        ?>
    </main>
</body>
</html>