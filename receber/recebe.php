<?php

// Contato

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $texto = $_POST['texto'];

   echo "Nome: " . $nome . "<br>";
   echo "Email: " . $email . "<br>";
   echo "Telefone: " .$telefone . "<br>";
   echo "Mensagem Enviada: " . $texto . "<br>";

//    Login

//    $login_email = $_POST['email-login'];
//    $login_senha = $_POST['senha-login'];
//    $login_confirmar_senha = $_POST['confirmar-senha-login'];

//    echo "Email: " . $login_email. "<br>";
//    echo "Senha: " . $login_senha . "<br>";
//    echo "Confirmar Senha: " .$login_confirmar_senha . "<br>";

//    Cadastro

//    $cadastro_nome = $_POST['cadastro-nome'];
//    $cadastro_email = $_POST['cadastro-email'];
//    $cadastro_criar_senha = $_POST['cadastro-criar-senha'];
//    $cadastro_confirmar_senha = $_POST['cadastro-confirmar-senha'];
//    $cadastro_cpf = $_POST['cadastro-cpf'];

//    echo "Nome: " . $cadastro_nome . "<br>";
//    echo "Email: " . $cadastro_email . "<br>";
//    echo "Criar Senha: " . $cadastro_criar_senha . "<br>";
//    echo "Confirmar Senha: " . $cadastro_confirmar_senha . "<br>";
//    echo "CPF: " . $cadastro_cpf . "<br>";
?>