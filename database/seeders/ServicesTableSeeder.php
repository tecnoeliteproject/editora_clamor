<?php

namespace Database\Seeders;

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
                'pricing' => json_encode([
                    '50' => 330.00,
                    '100' => 280.00,
                    '150' => 230.00,
                    '200' => 205.00,
                    '250' => 180.00,
                    '+250' => 160.00,
                ]),
            ],
            [
                'name' => 'Preparação do texto',
                'descricao' => 'Preparação técnica do texto.',
                'pricing' => json_encode([
                    '50' => 102.00,
                    '100' => 102.00,
                    '150' => 102.00,
                    '200' => 102.00,
                    '250' => 102.00,
                    '+250' => 102.00,
                ]),
            ],
            [
                'name' => 'Revisão técnica e linguística',
                'descricao' => 'Revisão técnica e linguística para manuscritos.',
                'pricing' => json_encode([
                    '50' => 751.00,
                    '100' => 722.00,
                    '150' => 693.00,
                    '200' => 665.00,
                    '250' => 627.00,
                    '+250' => 607.00,
                ]),
            ],
            [
                'name' => 'Diagramação e Capa',
                'descricao' => 'Diagramação e criação da capa.',
                'pricing' => json_encode([
                    '50' => 608.00,
                    '100' => 580.00,
                    '150' => 570.00,
                    '200' => 560.00,
                    '250' => 540.00,
                    '+250' => 500.00,
                ]),
            ],
            [
                'name' => 'Acabamentos e Impressão',
                'descricao' => 'Impressão e acabamento do material.',
                'pricing' => json_encode([
                    '50' => 2553.00,
                    '100' => 2984.00,
                    '150' => 3283.00,
                    '200' => 3875.00,
                    '250' => 4920.00,
                    '+250' => 4950.00,
                ]),
            ],
            [
                'name' => 'Registro do livro ISBN e Depósito Legal',
                'descricao' => 'Registro de ISBN e Depósito Legal.',
                'pricing' => json_encode([
                    'default' => 17835.00, // Preço fixo
                ]),
            ],
            [
                'name' => 'Marketing e Publicação',
                'descricao' => 'Pacotes de marketing e publicação.',
                'pricing' => json_encode([
                    '1º Pacote' => 24705.00,
                    '2º Pacote' => 29405.00,
                    '3º Pacote' => 147020.00,
                ]),
            ],
            [
                'name' => 'Revenda',
                'descricao' => 'Serviço de revenda.',
                'pricing' => json_encode([
                    'default' => 1200.00, // Preço fixo
                ]),
            ],
        ]);
    }
}
