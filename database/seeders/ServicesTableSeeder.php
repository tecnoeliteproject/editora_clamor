<?php

namespace Database\Seeders;

use App\Models\Price;
use App\Models\Servico;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        Servico::insert([
            [
                'nome' => 'Redação (Para manuscritos)',
                'descricao' => 'Serviço de redação baseado em manuscritos entregues.',
            ],
            [
                'name' => 'Preparação do texto',
                'descricao' => 'Preparação técnica do texto.',
            ],
            [
                'name' => 'Revisão técnica e linguística',
                'descricao' => 'Revisão técnica e linguística para manuscritos.',
            ],
            [
                'name' => 'Diagramação e Capa',
                'descricao' => 'Diagramação e criação da capa.',
            ],
            [
                'name' => 'Acabamentos e Impressão',
                'descricao' => 'Impressão e acabamento do material.',
            ],
            [
                'name' => 'Registro do livro ISBN e Depósito Legal',
                'descricao' => 'Registro de ISBN e Depósito Legal.',
            ],
            [
                'name' => 'Marketing e Publicação',
                'descricao' => 'Pacotes de marketing e publicação.',
            ],
            [
                'name' => 'Revenda',
                'descricao' => 'Serviço de revenda.',
            ],
        ]);

        Price::insert([
            [
                'servico_id' => 1,
                'price' => 330,
                'quantidade_paginas' => 50,
            ],
            [
                'servico_id' => 1,
                'price' => 280,
                'quantidade_paginas' => 100,
            ],
            [
                'servico_id' => 1,
                'price' => 230,
                'quantidade_paginas' => 150,
            ],
            [
                'servico_id' => 1,
                'price' => 205,
                'quantidade_paginas' => 200,
            ],
            [
                'servico_id' => 1,
                'price' => 180,
                'quantidade_paginas' => 250,
            ],
            [
                'servico_id' => 1,
                'price' => 160,
                'quantidade_paginas' => 251,
            ],
        ]);

        Price::insert([
            [
                'servico_id' => 2,
                'price' => 102,
                'quantidade_paginas' => 50,
            ],
            [
                'servico_id' => 2,
                'price' => 102,
                'quantidade_paginas' => 100,
            ],
            [
                'servico_id' => 2,
                'price' => 95,
                'quantidade_paginas' => 150,
            ],
            [
                'servico_id' => 2,
                'price' => 95,
                'quantidade_paginas' => 200,
            ],
            [
                'servico_id' => 2,
                'price' => 71,
                'quantidade_paginas' => 250,
            ],
            [
                'servico_id' => 2,
                'price' => 69,
                'quantidade_paginas' => 251,
            ],
        ]);

        Price::insert([
            [
                'servico_id' => 3,
                'price' => 751,
                'quantidade_paginas' => 50,
            ],
            [
                'servico_id' => 3,
                'price' => 722,
                'quantidade_paginas' => 100,
            ],
            [
                'servico_id' => 3,
                'price' => 693,
                'quantidade_paginas' => 150,
            ],
            [
                'servico_id' => 3,
                'price' => 659,
                'quantidade_paginas' => 200,
            ],
            [
                'servico_id' => 3,
                'price' => 605,
                'quantidade_paginas' => 250,
            ],
            [
                'servico_id' => 3,
                'price' => 527,
                'quantidade_paginas' => 251,
            ],
        ]);

        Price::insert([
            [
                'servico_id' => 4,
                'price' => 903,
                'quantidade_paginas' => 50,
            ],
            [
                'servico_id' => 4,
                'price' => 802,
                'quantidade_paginas' => 100,
            ],
            [
                'servico_id' => 4,
                'price' => 701,
                'quantidade_paginas' => 150,
            ],
            [
                'servico_id' => 4,
                'price' => 600,
                'quantidade_paginas' => 200,
            ],
            [
                'servico_id' => 4,
                'price' => 499,
                'quantidade_paginas' => 250,
            ],
            [
                'servico_id' => 4,
                'price' => 398,
                'quantidade_paginas' => 251,
            ],
        ]);

        Price::insert([
            [
                'servico_id' => 5,
                'price' => 2553,
                'quantidade_paginas' => 50,
            ],
            [
                'servico_id' => 5,
                'price' => 2984,
                'quantidade_paginas' => 100,
            ],
            [
                'servico_id' => 5,
                'price' => 3332,
                'quantidade_paginas' => 150,
            ],
            [
                'servico_id' => 5,
                'price' => 3875,
                'quantidade_paginas' => 200,
            ],
            [
                'servico_id' => 5,
                'price' => 4290,
                'quantidade_paginas' => 250,
            ],
            [
                'servico_id' => 5,
                'price' => 4950,
                'quantidade_paginas' => 251,
            ],
        ]);

        Price::insert([
            [
                'servico_id' => 6,
                'price' => 37835,
                'quantidade_paginas' => 150,
            ],
            [
                'servico_id' => 6,
                'price' => 659,
                'quantidade_paginas' => 200,
            ],
            [
                'servico_id' => 6,
                'price' => 605,
                'quantidade_paginas' => 250,
            ],
            [
                'servico_id' => 6,
                'price' => 527,
                'quantidade_paginas' => 251,
            ],
        ]);

        Price::insert([
            [
                'servico_id' => 7,
                'price' => 48930,
                'quantidade_paginas' => 200,
            ],
            [
                'servico_id' => 7,
                'price' => 99705,
                'quantidade_paginas' => 250,
            ],
            [
                'servico_id' => 7,
                'price' => 147000,
                'quantidade_paginas' => 251,
            ],
        ]);

        Price::insert([
            [
                'servico_id' => 8,
                'price' => 1200,
                'quantidade_paginas' => 150,
            ],
            [
                'servico_id' => 8,
                'price' => 1200,
                'quantidade_paginas' => 200,
            ],
            [
                'servico_id' => 8,
                'price' => 1200,
                'quantidade_paginas' => 250,
            ],
            [
                'servico_id' => 8,
                'price' => 1200,
                'quantidade_paginas' => 251,
            ],
        ]);
    }
}
