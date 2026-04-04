<?php
require_once 'init.php';
// print '<pre>';
// print_r($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $ids = array_column($_SESSION['produtos'], 'id');
    $novoId = $ids ? max($ids) + 1 : 1;

    // if ($ids) {
    // $novoId = max($ids)+1
    //} else {
    //  $novoId = 1;
    // }

    $_SESSION['produtos'][] = [
        'id' => $novoId,
        'nome' => $_POST['nome'],
        'preco' => $_POST['preco'],
        'categoria' => $_POST['categoria'],
        'imagem' => $_POST['imagem']
    ];
    header('Location: produtos.php?produtoadd=1');
    exit;
};

// print_r($_SESSION['produtos']);
// print '</pre>';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nomeLoja; ?></title>
    <link rel="stylesheet" href="css/cadastrar-produto.css">
    <link rel="icon" href="imagens/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body>

    <?php
    require 'partials/header.php';
    ?>

    <section>
        <div class="container">

            <div class="form-card">
                <h2>Cadastrar Novo Produto</h2>

                <form action="cadastrar-produto.php" method="POST">
                    <div class="form-group">
                        <label>Nome do Produto</label>
                        <input type="text" placeholder="Digite o nome do produto" name="nome">
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label>Categoria</label>
                            <select name="categoria">
                                <option>Selecione</option>
                                <option value="Roupas Masculinas">Roupa Masculina</option>
                                <option value="Roupa Feminina">Roupa Feminina</option>
                                <option value="Aparelhos">Aparelhos</option>
                                <option value="Ergômetros">Ergômetros</option>
                                <option value="Suplementos">Suplementos</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Preço (R$)</label>
                            <input type="number" step="0.01" placeholder="0.00" name="preco">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Imagem do Produto</label>
                        <input type="text" placeholder="URL da imagem" name="imagem">
                    </div>

                    <div class="form-group">
                        <label>Descrição do Produto</label>
                        <textarea placeholder="Digite uma descrição detalhada do produto..." name="texto"></textarea>
                    </div>

                    <button class="btn">Cadastrar Produto</button>
                </form>
            </div>

        </div>
    </section>


    <?php
    require_once 'partials/footer.php';
    ?>

</body>

</html>