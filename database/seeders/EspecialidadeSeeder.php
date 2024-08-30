<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Especialidade;

class EspecialidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Especialidade::factory()->count(4)->sequence(
            ['nome' => 'Black Work'],
            ['nome' => 'Realismo'],
            ['nome' => 'Neo Tradicional'],
            ['nome' => 'Old School']
        )->create();
    }
}
