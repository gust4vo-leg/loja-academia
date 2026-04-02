<?php
   $nome = $_POST['nome'];
   $categoria = $_POST['produto'];
   $preco = $_POST['preco'];
   $quantidade = $_POST['quantidade'];
   $codigo = $_POST['codigo'];
   $texto = $_POST['texto'];

   echo "Nome do produto: " . $nome . "<br>";
   echo "Categoria: " . $categoria . "<br>";
   echo "Preço: " . $preco . "<br>";
   echo "Quantidade: " . $quantidade . "<br>";
   echo "Código: " . $codigo . "<br>";
   echo "Descrição do Produto: " . $texto . "<br>";
?>