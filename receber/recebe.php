<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $texto = $_POST['texto'];

    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Telefone: " . $telefone . "<br>";
    echo "Mensagem Enviada: " . $texto . "<br>";
