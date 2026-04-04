<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $criarsenha = $_POST['criarsenha'];
    $confirmarsenha = $_POST['confirmarsenha'];
    $cpf = $_POST['cpf'];

    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Criar Senha: " . $criarsenha . "<br>";
    echo "Confirmar Senha: " . $confirmarsenha . "<br>";
    echo "CPF: " . $cpf . "<br>";
?>