<?php
require_once 'init.php';

$categoria_get = isset($_GET['categoria']) ? trim($_GET['categoria']) : '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - <?php echo $nomeLoja ?></title>
    <link rel="stylesheet" href="css/produtos.css">
    <link rel="icon" href="imagens/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

<?php require 'partials/header.php'; ?>

<?php
if (isset($_GET['produtoadd']) && $_GET['produtoadd'] === '1') {
    echo '<p class="aviso">Produto Adicionado Com Sucesso!!!</p>';
}
?>

<main>
    <div class="container">

        <!-- MENU DE CATEGORIAS -->
        <nav>
            <ul>
                <li>
                    <a href="produtos.php"
                       class="<?php echo $categoria_get == '' ? 'ativo' : ''; ?>">
                        Todos
                    </a>
                </li>

                <?php 
                foreach ($categorias as $kcat => $nome) {
                    $ativo = ($categoria_get == $kcat) ? 'ativo' : '';

                    echo '
                    <li>
                        <a href="produtos.php?categoria='.$kcat.'" class="'.$ativo.'">
                            '.$nome.'
                        </a>
                    </li>';
                }
                ?>
            </ul>
        </nav>

    </div>

    <!-- PRODUTOS -->
    <section id="produtos">
        <div class="grid">

            <?php
            foreach ($produtos_base as $produto) {

                // FILTRO POR CATEGORIA
                if ($categoria_get && $produto['categoria'] != $categoria_get) {
                    continue;
                }

                echo '
                <article class="produto '.$produto['categoria'].'" data-id="'.$produto['id'].'">
                    <img src="'.$produto['imagem'].'" alt="'.$produto['nome'].'">
                    <h3>'.$produto['nome'].'</h3>
                    <p class="preco">R$ '.number_format($produto['preco'], 2, ',', '.').'</p>
                    <a href="verificacao_produto.php?id='.$produto['id'].'" class="btn-comprar">Comprar</a>
                </article>
                ';
            }
            ?>

        </div>
    </section>
</main>

<?php require_once 'partials/footer.php'; ?>

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