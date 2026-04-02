<?php
require_once 'init.php';
// print "<pre>";
// print_r($produtos_base);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - <?php echo $nomeLoja; ?></title>
    <link rel="stylesheet" href="css/produtos.css">
    <link rel="icon" href="imagens/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body>
    <?php
    require 'partials/header.php';
    if (isset($_GET['produtoadd']) && $_GET['produtoadd'] === '1') {
        print '<p class="aviso">Produto Adicionado Com Sucesso!!!</p>';
    }
    ?>
    <main>
        <div class="container">
            <h1>Produtos</h1>

            <nav class="tipos">
                <ul>
                    <?php
                    foreach ($categorias as $kcat => $nome) {
                        print '<a href="#cat ' . $kcat . '"> ' . $nome . '</a>';
                    };
                    ?>
                </ul>
            </nav>
        </div>
        <section id="produtos">

            <section id="cat-aparelhos">
                <h2>Aparelhos</h2>
                <div class="grid">
                    <?php
                    foreach ( $_SESSION['produtos'] as $produtos_aparelho) {
                        print '<article class="produto">
                        <img src="' . $produtos_aparelho['imagem'] . '" alt="Banco supino">
                        <h3>' . $produtos_aparelho['nome'] . '</h3>
                        <p class="preco">R$ ' . $produtos_aparelho['preco'] . '</p>
                        <button>Comprar</button>
                    </article>';
                    }
                    ?>
                </div>
                <br>
            </section>

            <section id="cat-ergometros">
                <h2>Ergômetros</h2>
                <div class="grid">

                    <?php
                    foreach ($produtos_base_ergometros as $produto_ergometros) {
                        print '<article class="produto">
                        <img src="' . $produto_ergometros['imagem'] . '" alt="Esteira ergométrica">
                        <h3>' . $produto_ergometros['nome'] . '</h3>
                        <p class="preco">R$ ' . $produto_ergometros['preco'] . '</p>
                        <button>Comprar</button>
                    </article>';
                    }
                    ?>
                </div>
            </section>

            <section id="cat-suplementos">
                <h2>Suplementos</h2>
                <div class="grid">
                    <?php
                    foreach ($produtos_base_suplementos as $produto_suplementos) {
                        print '<article class="produto">
                        <img src="' . $produto_suplementos['imagem'] . '" alt="creatina">
                        <h3>' . $produto_suplementos['nome'] . '</h3>
                        <p class="preco">R$ ' . $produto_suplementos['preco'] . '</p>
                        <button>Comprar</button>
                    </article>';
                    }
                    ?>
                </div>
            </section>

            <section id="cat-roupas-masculinas">
                <h2>Roupas Masculinas</h2>
                <div class="grid">
                    <?php
                    foreach ($produtos_base_roupa as $produto_roupa) {
                        print '<article class="produto">
                        <img src="' . $produto_roupa['imagem'] . '" alt="moletom">
                        <h3>' . $produto_roupa['nome'] . '</h3>
                        <p class="preco">R$ ' . $produto_roupa['preco'] . '</p>
                        <button>Comprar</button>
                    </article>';
                    }
                    ?>
                </div>
            </section>

            <section id="cat-roupas-femininas">
                <h2>Roupas Femininas</h2>
                <div class="grid">
                    <?php
                    foreach ($produtos_base_roupa_feminina as $produtos_roupa_feminina) {
                        print '<article class="produto">
                        <img src="' . $produtos_roupa_feminina['imagem'] . '" alt="moletom">
                        <h3>' . $produtos_roupa_feminina['nome'] . '</h3>
                        <p class="preco">R$ ' . $produtos_roupa_feminina['preco'] . '</p>
                        <button>Comprar</button>
                    </article>';
                    }
                    ?>
                    
                </div>
            </section>
        </section>
    </main>

    <?php 
    require_once 'partials/footer.php';
    ?>

    <script>
        window.onscroll = function() {
            const header = document.querySelector('.topo');

            if (window.scrollY > 350) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        };
    </script>
</body>

</html>