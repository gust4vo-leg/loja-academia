<?php

// Contato

//    $nome = $_POST['nome'];
//    $email = $_POST['email'];
//    $telefone = $_POST['telefone'];
//    $texto = $_POST['texto'];

//    echo "Nome: " . $nome . "<br>";
//    echo "Email: " . $email . "<br>";
//    echo "Telefone: " .$telefone . "<br>";
//    echo "Mensagem Enviada: " . $texto . "<br>";

//    Login

//    $login_email = $_POST['email-login'];
//    $login_senha = $_POST['senha-login'];
//    $login_confirmar_senha = $_POST['confirmar-senha-login'];

//    echo "Email: " . $login_email. "<br>";
//    echo "Senha: " . $login_senha . "<br>";
//    echo "Confirmar Senha: " .$login_confirmar_senha . "<br>";

//    Cadastro

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