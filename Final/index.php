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
    <main>
        <section id="heroPage">
            
        <div id="logo" class="container">
            <div id="k12">
                <img src="imgs/logo.png" alt="">
            </div>
            <h2>Seu site é perfeitamente imperfeito</h2>

              
            <div id="reviews">
                <div>
                    <h4>Do conceito á presença online:</h4>
                    <p>desenvolvemos sites que impulsionam o <span>seu negócio</span></p>
                </div>
                <div>
                    <h4>Cada pixel conta uma história:</h4>
                    <p>deixe-nos contar a história de sua marca através do<br><span>seu site</span></p>
                </div>
                <div>
                <h4>Transformando ideias em presença digital:</h4>
                    <p>crimos sites que contam a história da<br><span>sua marca</span></p>
                </div>
            </div>
        </section>
        <section id="oferecemos">

            <h5></h5>
            <h3>Acesse nossas ideias:</h3>

            <div id="card-container">
                <div class="card">
                    <img src="https://www.remessaonline.com.br/blog/wp-content/uploads/2020/12/TI-Verde.jpg.optimal.jpg">
                </div>
                <div class="card">
                    <img src="https://fia.com.br/wp-content/uploads/2021/01/tecnologia-verde-3-tipos-de.jpg">
                </div>
                <div class="card">
                    <img src="https://i.pinimg.com/736x/45/06/88/450688f4f72dd1de9f2051687ebb25a5.jpg">
                </div>
            </div>
        </section>
    </main>
    <footer>

    </footer>

    <?php 
        include("conexao.php")
    ?>
</body>
</html>