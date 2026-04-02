<?php
require_once 'init.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar - <?php echo $nomeLoja; ?></title>
    <link rel="stylesheet" href="css/cadastrar.css">
    <link rel="icon" href="imagens/logo.png">
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
                    <li><a href="index.php">Home</a></li>

                    <li class="dropdown">
                        <a href="#">Produtos<span class="arrow"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#aparelhos">Aparelhos</a></li>
                            <li><a href="#ergometros">Ergômetros</a></li>
                            <li><a href="#suplementos">Suplementos</a></li>
                            <li><a href="produtos.php #roupas">Roupas</a></li>
                            <li><a href="produtos.php">Outros</a></li>
                        </ul>
                    </li>

                    <li><a href="index.php">Contato</a></li>
                </ul>
            </nav>

            <a href="login.php" class="login">Login</a>
        </div>
    </header>
    <main>
        <section class="cadastrar">
            <form action="receber/receber-cadastro.php" method="POST">
                <h2>Cadastrar</h2>

                <input type="text" placeholder="Nome Completo" name="nome" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Criar Senha" name="criarsenha" required>
                <input type="password" placeholder="Confirmar Senha" name="confirmarsenha" required>
                <input type="number" placeholder="CPF" name="cpf" required>

                <button type="submit">Cadastrar</button>

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