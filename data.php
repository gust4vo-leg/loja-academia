<?php
$nomeLoja = "Fit Force";

$categorias = [
    'aparelhos' => 'Aparelhos',
    'ergometros' => 'Ergômetros',
    'suplementos' => 'Suplementos',
    'roupamasculina' => 'Roupas Masculina',
    'roupafeminina' => 'Roupa Feminino',
    'outros' => 'Outros'
];

$produtos_base = [
    [
        'id' => 1,
        'nome' => 'Banco Supino',
        'preco' => 429.90,
        'categoria' => 'aparelhos',
        'imagem' => 'imagens/supino.png',
        'texto' => 'Banco supino resistente e confortável, ideal para treinos de peito com barra ou halteres. Estrutura reforçada e design ergonômico.'
    ],
    [
        'id' =>2,
        'nome' => 'Leg Press 90°',
        'preco' => 1999.90,
        'categoria' => 'aparelhos',    
        'imagem' => 'imagens/leg.png',
        'texto' => 'Equipamento profissional para treino de pernas, focado em quadríceps e glúteos. Estrutura robusta e suporte para altas cargas.'
    ],
    [
        'id' =>3,
        'nome' => 'Puxada Alta',
        'preco' => 6999.90,
        'categoria' => 'aparelhos',    
        'imagem' => 'imagens/costas.png',
        'texto' => 'Máquina ideal para treino de costas, especialmente dorsal. Sistema de cabos suave e banco confortável.'
    ],
    [
        'id' =>4,
        'nome' => 'Esteira',
        'preco' => 1999.90,
        'categoria' => 'ergometros',    
        'imagem' => 'imagens/esteira.png',
        'texto' => 'Esteira ergométrica com controle de velocidade, ideal para caminhadas e corridas em casa.'
    ],
    [
        'id' =>5,
        'nome' => 'Bicicleta',
        'preco' => 649.90,
        'categoria' => 'ergometros',    
        'imagem' => 'imagens/bicicleta.png',
        'texto' => 'Bicicleta ergométrica confortável, perfeita para exercícios cardiovasculares com baixo impacto.'
    ],
    [
        'id' =>6,
        'nome' => 'Whey Protein',
        'preco' => 79.90,
        'categoria' => 'suplementos',    
        'imagem' => 'imagens/whey.png',
        'texto' => 'Suplemento proteico ideal para ganho de massa muscular e recuperação pós-treino.'
    ],
    [
        'id' =>7,
        'nome' => 'Creatina',
        'preco' => 59.90,
        'categoria' => 'suplementos',    
        'imagem' => 'imagens/creatina.png',
        'texto' => 'Creatina de alta qualidade que aumenta força, desempenho e explosão muscular.'
    ],
    [
        'id' =>8,
        'nome' => 'Moletom Fit Force',
        'preco' => 149.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/moletom.png',
        'texto' => 'Moletom confortável e estiloso, ideal para treinos em dias frios ou uso casual.'
    ],
    [
        'id' =>9,
        'nome' => 'Camiseta Dry Fit',
        'preco' => 69.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/camiseta(m).png',
        'texto' => 'Camiseta leve com tecnologia Dry Fit que ajuda na evaporação do suor durante o treino.'
    ],
    [
        'id' =>10,
        'nome' => 'Camiseta Térmica Fit Force',
        'preco' => 119.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/camiseta-termica.png',
        'texto' => 'Camiseta térmica ideal para manter a temperatura corporal durante treinos em clima frio.'
    ],
    [
        'id' =>11,
        'nome' => 'Conjunto Térmica + Calça Fit Force',
        'preco' => 219.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/conjuntoTermico.png',
        'texto' => 'Conjunto completo térmico para máximo conforto e desempenho em dias frios.'
    ],
    [
        'id' =>12,
        'nome' => 'Bermuda Fit Force',
        'preco' => 59.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/bermuda.png',
        'texto' => 'Bermuda leve e confortável, perfeita para treinos intensos ou uso casual.'
    ],
    [
        'id' =>13,
        'nome' => 'Moletom Feminino Fit Force',
        'preco' => 149.90,
        'categoria' => 'roupafeminina',    
        'imagem' => 'imagens/moletom-feminino.png',
        'texto' => 'Moletom feminino com ótimo caimento, ideal para conforto e estilo no dia a dia.'
    ],
    [
        'id' =>14,
        'nome' => 'Legging Feminina Fit Force',
        'preco' => 49.90,
        'categoria' => 'roupafeminina',    
        'imagem' => 'imagens/legging.png',
        'texto' => 'Legging com alta elasticidade e conforto, ideal para academia e atividades físicas.'
    ],
];