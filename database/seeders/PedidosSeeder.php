<?php

namespace Database\Seeders;

use App\Models\Articulo;
use App\Models\Pedido;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(9)->create();
        Articulo::factory(10)->create();
        Pedido::factory(10)->create();
    }
}
