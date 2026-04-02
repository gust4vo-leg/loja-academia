<?php
require_once 'init.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto - <?php echo $nomeLoja; ?></title>

    <link rel="stylesheet" href="css/verificacao_produto.css">
    <link rel="icon" href="imagens/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body>

    <?php
    require 'partials/header.php';  
  ?>
    <main class="container">

        <p class="caminho-produtos">
            <a href="produtos.php">Produtos</a> / Moletom Fit Force
        </p>

        <section class="produto">

            <div class="miniaturas">
                <img src="imagens/moletom.png" onclick="trocarImagem(this)">
                <img src="imagens/moletom-traseiro.png" onclick="trocarImagem(this)">
                <img src="imagens/moletom-ldireito.png" onclick="trocarImagem(this)">
                <img src="imagens/moletom-lesquerdo.png" onclick="trocarImagem(this)">
            </div>

            <div class="img-principal">
                <img id="imgPrincipal" src="imagens/moletom.png">
            </div>

            <div class="info">

                <h2>Moletom Fit Force</h2>

                <div class="avaliacao">
                    ⭐⭐⭐⭐⭐ <span>(124 avaliações)</span>
                </div>

                <p class="preco">R$ 149,90</p>

                <p class="descricao">
                    Moletom confortável, ideal para o dia a dia.
                    Material leve, resistente e perfeito para treinos ou uso casual.
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
                <article class="ver-produto">
                    <img src="imagens/agasalho.png" alt="agasalho">
                    <h3>Agasalho Fit Force</h3>
                    <p class="preco">R$ 119,90</p>
                    <button>Comprar</button>
                </article>

                <article class="ver-produto">
                    <img src="imagens/whey.png" alt="Whey protein">
                    <h3>Whey Protein</h3>
                    <p class="preco">R$ 80,00</p>
                    <button>Comprar</button>
                </article>

                <article class="ver-produto">
                    <img src="imagens/camiseta-termica.png" alt="termico">
                    <h3>Camiseta Térmica Fit Force</h3>
                    <p class="preco">R$ 119,90</p>
                    <button>Comprar</button>
                </article>

                <article class="ver-produto">
                    <img src="imagens/creatina.png" alt="Creatina">
                    <h3>Creatina</h3>
                    <p class="preco">R$ 60,00</p>
                    <button>Comprar</button>
                </article>

                <article class="ver-produto">
                    <img src="imagens/preTreino.png" alt="pre-treino">
                    <h3>Pré Treino</h3>
                    <p class="preco">R$ 170,00</p>
                    <button>Comprar</button>
                </article>

                <article class="ver-produto">
                    <img src="imagens/agasalho.png" alt="agasalho">
                    <h3>Agasalho Fit Force</h3>
                    <p class="preco">R$ 119,90</p>
                    <button>Comprar</button>
                </article>
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