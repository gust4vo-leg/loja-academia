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
        'tamanho' => 'Único',
        'texto' => 'Banco supino resistente e confortável, ideal para treinos de peito com barra ou halteres. Estrutura reforçada e design ergonômico.'
    ],
    [
        'id' =>2,
        'nome' => 'Leg Press 90°',
        'preco' => 1999.90,
        'categoria' => 'aparelhos',    
        'imagem' => 'imagens/leg.png',
        'tamanho' => 'Único',
        'texto' => 'Equipamento profissional para treino de pernas, focado em quadríceps e glúteos. Estrutura robusta e suporte para altas cargas.'
    ],
    [
        'id' =>3,
        'nome' => 'Puxada Alta',
        'preco' => 6999.90,
        'categoria' => 'aparelhos',    
        'imagem' => 'imagens/costas.png',
        'tamanho' => 'Único',
        'texto' => 'Máquina ideal para treino de costas, especialmente dorsal. Sistema de cabos suave e banco confortável.'
    ],
    [
        'id' =>4,
        'nome' => 'Esteira',
        'preco' => 1999.90,
        'categoria' => 'ergometros',    
        'imagem' => 'imagens/esteira.png',
        'tamanho' => 'Único',
        'texto' => 'Esteira ergométrica com controle de velocidade, ideal para caminhadas e corridas em casa.'
    ],
    [
        'id' =>5,
        'nome' => 'Bicicleta',
        'preco' => 649.90,
        'categoria' => 'ergometros',    
        'imagem' => 'imagens/bicicleta.png',
        'tamanho' => 'Único',
        'texto' => 'Bicicleta ergométrica confortável, perfeita para exercícios cardiovasculares com baixo impacto.'
    ],
    [
        'id' =>6,
        'nome' => 'Whey Protein',
        'preco' => 79.90,
        'categoria' => 'suplementos',    
        'imagem' => 'imagens/whey.png',
        'tamanho' => ['500g', '1kg', '1,5kg'],
        'texto' => 'Suplemento proteico ideal para ganho de massa muscular e recuperação pós-treino.'
    ],
    [
        'id' =>7,
        'nome' => 'Creatina',
        'preco' => 59.90,
        'categoria' => 'suplementos',    
        'imagem' => 'imagens/creatina.png',
        'tamanho' => ['300g', '500g', '1kg'],
        'texto' => 'Creatina de alta qualidade que aumenta força, desempenho e explosão muscular.'
    ],
    [
        'id' =>8,
        'nome' => 'Moletom Fit Force',
        'preco' => 149.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/moletom.png',
        'tamanho' => ['P', 'M', 'G', 'GG'],
        'texto' => 'Moletom confortável e estiloso, ideal para treinos em dias frios ou uso casual.'
    ],
    [
        'id' =>9,
        'nome' => 'Camiseta Dry Fit',
        'preco' => 69.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/camiseta(m).png',
        'tamanho' => ['P', 'M', 'G', 'GG'],
        'texto' => 'Camiseta leve com tecnologia Dry Fit que ajuda na evaporação do suor durante o treino.'
    ],
    [
        'id' =>10,
        'nome' => 'Camiseta Térmica Fit Force',
        'preco' => 119.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/camiseta-termica.png',
        'tamanho' => ['P', 'M', 'G', 'GG'],
        'texto' => 'Camiseta térmica ideal para manter a temperatura corporal durante treinos em clima frio.'
    ],
    [
        'id' =>11,
        'nome' => 'Conjunto Térmica + Calça Fit Force',
        'preco' => 219.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/conjuntoTermico.png',
        'tamanho' => ['P', 'M', 'G', 'GG'],
        'texto' => 'Conjunto completo térmico para máximo conforto e desempenho em dias frios.'
    ],
    [
        'id' =>12,
        'nome' => 'Bermuda Fit Force',
        'preco' => 59.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/bermuda.png',
        'tamanho' => ['P', 'M', 'G', 'GG'],
        'texto' => 'Bermuda leve e confortável, perfeita para treinos intensos ou uso casual.'
    ],
    [
        'id' =>13,
        'nome' => 'Moletom Feminino Fit Force',
        'preco' => 149.90,
        'categoria' => 'roupafeminina',    
        'imagem' => 'imagens/moletom-feminino.png',
        'tamanho' => ['P', 'M', 'G', 'GG'],
        'texto' => 'Moletom feminino com ótimo caimento, ideal para conforto e estilo no dia a dia.'
    ],
    [
        'id' =>14,
        'nome' => 'Legging Feminina Fit Force',
        'preco' => 49.90,
        'categoria' => 'roupafeminina',    
        'imagem' => 'imagens/legging.png',
        'tamanho' => ['P', 'M', 'G', 'GG'],
        'texto' => 'Legging com alta elasticidade e conforto, ideal para academia e atividades físicas.'
    ],
];