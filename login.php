<?php
require_once 'init.php';
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Fit Foce</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body>
    <header class="topo">
        <div class="topo-menu">
            <a href="#home">
                <img src="imagens/logo.png" class="logo" alt="Logo Fit Force">
            </a>

            <nav>
                <ul class="menu">
                    <li><a href="index.html">Home</a></li>

                    <li class="dropdown">
                        <a href="#">Produtos<span class="arrow"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#aparelhos">Aparelhos</a></li>
                            <li><a href="#ergometros">Ergômetros</a></li>
                            <li><a href="#suplementos">Suplementos</a></li>
                            <li><a href="produtos.html #roupas">Roupas</a></li>
                            <li><a href="produtos.html">Outros</a></li>
                        </ul>
                    </li>

                    <li><a href="index.html">Contato</a></li>
                </ul>
            </nav>

            <a href="cadastrar.html" class="cadastrar">Cadastrar</a>
        </div>
    </header>
    <main>
        <section class="login">
            <form action="receber/receber-login.php" method="POST">
                <h2>Login</h2>




                <input type="email" placeholder="Email" name="email-login" required>
                <input type="password" placeholder="Senha" name="senha-login" required>
                <input type="password" placeholder="Confirmar Senha" name="confirmar-senha-login" required>


                <a href="#">Esqueceu senha?</a>


                <br>
                <button type="submit" class="botao"><a href="index.php"> Entrar</a></button>
                <div class="opcoes">
                    <p> <i class="bi bi-google"></i></p>
                    <P><i class="bi bi-facebook"></i></P>
                    <p><i class="bi bi-apple"></i></p>
                </div>
            </form>
        </section>

    </main>
    <?php
    require_once 'partials/footer.php';
    ?>
</body>

</html>