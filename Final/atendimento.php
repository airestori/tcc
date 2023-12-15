<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melanies Car</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/headerStyle.js" defer></script>
    <script src="https://unpkg.com/scrollreveal@4"></script>
    <script src="js/scrollReveal.js" defer></script>
</head>
<body>
    <header id="header">
        <span id="logo">Melanie's Car</span>

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
    <main class="container" id="fillips2">
        <?php   

            include("conexao.php");

            if(mysqli_num_rows(mysqli_query($c, "SELECT * FROM atendimento")) == 0){

                $result = mysqli_query($c, "INSERT INTO atendimento(cod_protocolo, horário, data, cod_servico, cnpj) VALUES 
                (5000001, '20:30', '20/03/2023', 1111111, 235674874598),
                (5000002, '21:30', '02/03/2023', 2222222, 456586698096),
                (5000003, '13:00', '25/02/2023', 3333333, 767898854432),
                (5000004, '10:45', '01/03/2023', 4444444, 098768898721),
                (5000005, '08:20', '27/03/2023', 5555555, 987654321011);");

                //! Atualizar Dados
                $result = mysqli_query($c, "UPDATE atendimento SET data= '03/03/2023' WHERE cod_protocolo = 5000002;");

                //! Deletar Dados
                // $result = mysqli_query($c, "DELETE From atendimento WHERE cod_protocolo = 5000003;");

                
            }
        

            
            //! Mostrar Dados
            $sql =  "SELECT * FROM atendimento";
            $result = mysqli_query($c, $sql);
            if(mysqli_num_rows($result) > 0){
                echo
                '<table>
                    <tr>
                        <th> código do protocolo </th>
                        <th> horário </th>
                        <th> data </th>
                        <th> cod_servico </th>
                        <th> cnpj </th>
                    </tr>';
                while($row = mysqli_fetch_assoc($result)){
                    echo '<tr >
                    <td>' . $row["cod_protocolo"] . '</td>
                    <td> ' . $row["horário"] . '</td>
                    <td>' . $row["data"] . '</td>
                    <td> ' . $row["cod_servico"] . '</td>
                    <td>' . $row["cnpj"] . '</td>
                    </tr>';
                }
                echo '</table>';
            }
            else{
                echo "0 results";
            }
        ?>
    </main>
</body>
</html>