<?php
$nomeLoja = "Fit Force";

$categorias = [
    'aparelhos' => 'Aparelhos /',
    'ergometros' => 'Ergômetros /',
    'suplementos' => 'Suplementos /',
    'roupamasculino' => 'Roupas Masculina /',
    'roupafeminina' => 'Roupa Feminino /',
    'outros' => 'Outros'
];

$produtos_base_aparelho = [
    [
        'id' =>1,
        'nome' => 'Banco Supino',
        'preco' => 430.00,
        'categoria' => 'aparelhos',    
        'imagem' => 'imagens/supino.png'
    ],
    [
        'id' =>2,
        'nome' => 'Leg Press 90°',
        'preco' => 2000.00,
        'categoria' => 'aparelhos',    
        'imagem' => 'imagens/leg.png'
    ],
    [
        'id' =>3,
        'nome' => 'Puxada Alta',
        'preco' => 7000.00,
        'categoria' => 'aparelhos',    
        'imagem' => 'imagens/costas.png'
    ],
    [
        'id' =>4,
        'nome' => 'Cadeira Extensora e Flexora',
        'preco' => 5000.00,
        'categoria' => 'aparelhos',    
        'imagem' => 'imagens/extensora.png'
    ]
];

$produtos_base_ergometros = [
    [
        'id' =>1,
        'nome' => 'Esteira',
        'preco' => 2000.00,
        'categoria' => 'ergometros',    
        'imagem' => 'imagens/esteira.png'
    ],
    [
        'id' =>2,
        'nome' => 'Bicicleta',
        'preco' => 650.00,
        'categoria' => 'ergometros',    
        'imagem' => 'imagens/bicicleta.png'
    ],
    [
        'id' =>3,
        'nome' => 'Simulador de Escada',
        'preco' => 13590.90,
        'categoria' => 'ergometros',    
        'imagem' => 'imagens/escada.png'
    ],
    [
        'id' =>4,
        'nome' => 'Elíptico Fitness',
        'preco' => 4549.90,
        'categoria' => 'ergometros',    
        'imagem' => 'imagens/Elíptico.png'
    ]
];

$produtos_base_suplementos = [
    [
        'id' =>1,
        'nome' => 'Whey Protein',
        'preco' => 80.00,
        'categoria' => 'suplementos',    
        'imagem' => 'imagens/whey.png'
    ],
    [
        'id' =>2,
        'nome' => 'Creatina',
        'preco' => 60.00,
        'categoria' => 'suplementos',    
        'imagem' => 'imagens/creatina.png'
    ],
    [
        'id' =>3,
        'nome' => 'Pré Treino 50 - 300g',
        'preco' => 170,00,
        'categoria' => 'suplementos',    
        'imagem' => 'imagens/preTreino.png'
    ],
    [
        'id' =>4,
        'nome' => 'Hipercalorico 1 - 3kg',
        'preco' =>  119.90,
        'categoria' => 'suplementos',    
        'imagem' => 'imagens/hipercalorico.png'
    ]
];

$produtos_base_roupa = [
    [
        'id' =>1,
        'nome' => 'Moletom Fit Force',
        'preco' => 149.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/moletom.png'
    ],
    [
        'id' =>2,
        'nome' => 'Camiseta Dry Fit',
        'preco' => 69.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/camiseta(m).png'
    ],
    [
        'id' =>3,
        'nome' => 'Calça Esportiva Fit Force',
        'preco' => 159.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/calca.png'
    ],
    [
        'id' =>4,
        'nome' => 'Conjunto (camiseta + calça) Fit Force',
        'preco' => 279.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/conjunto(m).png'
    ],
    [
        'id' =>5,
        'nome' => 'Camiseta Térmica Fit Force',
        'preco' => 119.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/camiseta-termica.png'
    ],
    [
        'id' =>6,
        'nome' => 'Conjunto Térmico (Camiseta Térmica + Calça) Fit Force',
        'preco' => 329.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/conjunoTermico.png'
    ],
    [
        'id' =>7,
        'nome' => 'Bermuda Fit Force',
        'preco' => 69.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/bermuda.png'
    ],
    [
        'id' =>8,
        'nome' => 'Conjunto Moletom + Bermuda Fit Force',
        'preco' => 219.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/moletom+shorts.png'
    ],
    [
        'id' =>9,
        'nome' => 'Conjunto Corrida (Camiseta Dry Fit + Bermuda) Fit Force',
        'preco' => 129.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/conjunto-corida.png'
    ],
    [
        'id' =>10,
        'nome' => 'Regata Fit Force',
        'preco' => 49.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/regata.png'
    ],
    [
        'id' =>11,
        'nome' => 'Agasalho Fit Force',
        'preco' => 119.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/agasalho.png'
    ],
    [
        'id' =>12,
        'nome' => 'Corta Vento Fit Force',
        'preco' => 119.90,
        'categoria' => 'roupamasculina',    
        'imagem' => 'imagens/corta-vento.png'
    ]
];

$produtos_base_roupa_feminina = [
    [
        'id' =>1,
        'nome' => 'Calça Legging Fitness Femina',
        'preco' => 60.00,
        'categoria' => 'roupafeminino',    
        'imagem' => 'imagens/legging.png'
    ],
    [
        'id' =>2,
        'nome' => 'Top Fitness Fit Force',
        'preco' => 49.90,
        'categoria' => 'roupafeminino',    
        'imagem' => 'imagens/top.png'
    ],
    [
        'id' =>3,
        'nome' => 'Conjunto Fitness Legging e Top Feminino',
        'preco' => 169.90,
        'categoria' => 'roupafeminino',    
        'imagem' => 'imagens/conjunto-leggin.png'
    ],
    [
        'id' =>4,
        'nome' => 'Moletom Feminino Fit Force',
        'preco' => 149.90,
        'categoria' => 'roupafeminino',    
        'imagem' => 'imagens/moletom-feminino.png'
    ],
    [
        'id' =>5,
        'nome' => 'Camisa Termica Feminino Fit Force',
        'preco' => 119.90,
        'categoria' => 'roupafeminino',    
        'imagem' => 'imagens/Camisa-termica-feminino.png'
    ],
    [
        'id' =>6,
        'nome' => 'Conjunto (shorts + top) Fitness Feminina',
        'preco' => 119.90,
        'categoria' => 'roupafeminino',    
        'imagem' => 'imagens/conjuno-fitnes-feminino.png'
    ],
    [
        'id' =>7,
        'nome' => 'Regata Fitness Feminina',
        'preco' => 60.00,
        'categoria' => 'roupafeminino',    
        'imagem' => 'imagens/regata-feminina.png'
    ],
    [
        'id' =>8,
        'nome' => 'Agasalho Feminino Fitness',
        'preco' => 139.90,
        'categoria' => 'roupafeminino',    
        'imagem' => 'imagens/agasalho-feminino.png'
    ]
];

