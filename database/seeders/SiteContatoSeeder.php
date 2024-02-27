<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // SiteContato::create([
        //     'nome' => 'Sistema SG',
        //     'telefone' => '(11) 99999-9999',
        //     'email' => 'contato@email.com',
        //     'motivo_contato' => 1,
        //     'mensagem' => 'Seja bem vindo ao sistema SG',
        // ]);

        SiteContato::factory(count: 100)->create();
    }
}
