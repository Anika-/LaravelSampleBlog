<?php

use Illuminate\Database\Seeder;

class PublicacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\BlogPost::class, 20)->create();
    }
}
