<?php
require_once 'init.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$produto = null;
foreach ($_SESSION['produtos'] as $p) {
    if ($p['id'] === $id) {
        $produto = $p;
        break;
    }
}

if (!$produto) {
    header('Location: produtos.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto - Fit Force</title>

    <link rel="stylesheet" href="css/verificacao_produto.css">
    <link rel="icon" href="imagens/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body>

    <?php
    require_once 'partials/header.php';
    ?>

    <main class="container">

        <p class="caminho-produtos">
            <a href="produtos.php">Produtos</a> / <?php echo $produto['nome']; ?>
        </p>

        <section class="produto">

            <div class="miniaturas">
                <img src="<?php echo $produto['imagem']; ?>" onclick="trocarImagem(this)">
                <img src="<?php echo $produto['imagem']; ?>" onclick="trocarImagem(this)">
                <img src="<?php echo $produto['imagem']; ?>" onclick="trocarImagem(this)">
                <img src="<?php echo $produto['imagem']; ?>" onclick="trocarImagem(this)">
            </div>

            <div class="img-principal">
                <img id="imgPrincipal" src="<?php echo $produto['imagem']; ?>">
            </div>

            <div class="info">

                <h2><?php echo $produto['nome']; ?></h2>

                <div class="avaliacao">
                    ⭐⭐⭐⭐⭐ <span>(124 avaliações)</span>
                </div>

                <p class="preco">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>

                <p class="descricao">
                    <?php echo isset($produto['texto']) ? $produto['texto'] : 'Produto de qualidade Fit Force.'; ?>
                </p>

                <div class="tamanhos">
                    <span>P</span>
                    <span>M</span>
                    <span>G</span>
                    <span>GG</span>
                </div>

                <button class="comprar">Comprar agora</button>

            </div>

        </section>
        <section class="produtos-recomendados">
            <h3>Recomendados para você:</h3>

            <div class="grid">
                <?php
                $recomendados = array_filter($_SESSION['produtos'], function($p) use ($id) {
                    return $p['id'] !== $id;
                });
                $recomendados = array_values($recomendados);
                shuffle($recomendados);
                $recomendados = array_slice($recomendados, 0, 6);
 
                foreach ($recomendados as $r) {
                    echo '
                    <article class="ver-produto">
                        <img src="' . $r['imagem'] . '" alt="' . $r['nome'] . '">
                        <h3>' . $r['nome'] . '</h3>
                        <p class="preco">R$ ' . number_format($r['preco'], 2, ',', '.') . '</p>
                        <a href="verificacao_produto.php?id=' . $r['id'] . '"><button>Comprar</button></a>
                    </article>
                    ';
                }
                ?>
            </div>
        </section>
        <section class="cupons">
            <form>
                <h3>Receba ofertas e descontos exclusivos</h3>
                <p>Cadastre-se na nossa loja</p>

                <input type="text" placeholder="Nome Completo">
                <input type="email" placeholder="E-mail">

                <p>Prefere receber ofertas de produtos:</p>

                <div class="marcar">
                    <label>
                        <input type="radio" class="radio">
                        <div class="radio-texto">Masculino</div>
                    </label>
                    <label>
                        <input type="radio" class="radio">
                        <div class="radio-texto-feminino">Feminino</div>
                    </label>
                </div>

                <button>Aceitar e Cadastrar</button>
                
            </form>
        </section>
    </main>
    <?php
    require_once 'partials/footer.php';
    ?>
    <script>
        function trocarImagem(el) {
            document.getElementById("imgPrincipal").src = el.src;

            document.querySelectorAll(".miniaturas img").forEach(img => {
                img.classList.remove("active");
            });

            el.classList.add("active");
        }
    </script>

</body>

</html>