<?php 

session_start();

require_once 'data.php';

if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = $produtos_base_aparelho;
}

if (!isset($_SESSION['produtos_ergometros'])) {
    $_SESSION['produtos_ergometros'] = $produtos_base_ergometros;
}

if (!isset($_SESSION['produtos_suplementos'])) {
    $_SESSION['produtos_suplementos'] = $produtos_base_suplementos;
}

if (!isset($_SESSION['produtos_masculino'])) {
    $_SESSION['pprodutos_masculino'] = $produtos_base_roupa;
}

if (!isset($_SESSION['produtos_feminino'])) {
    $_SESSION['produtos_feminino'] = $produtos_base_roupa_feminina;
}
session_destroy();