<?php
    $login_email = $_POST['email-login'];
    $login_senha = $_POST['senha-login'];
    $login_confirmar_senha = $_POST['confirmar-senha-login'];

    echo "Email: " . $login_email. "<br>";
    echo "Senha: " . $login_senha . "<br>";
    echo "Confirmar Senha: " .$login_confirmar_senha . "<br>";