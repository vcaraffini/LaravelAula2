<?php
use Illuminate\Database\Seeder;
use App\Mensagem;
class mensagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensagem::create([
          'title' => 'ola 1',
          'description' => 'teste',
          'author' => 'caraffini',
          'user_id' => 1,
          'atividade_id' => 1
          ]);

        Mensagem::create([
          'title' => 'ola 1',
          'description' => 'teste',
          'author' => 'carafandowski',
          'user_id' => 1,
          'atividade_id' => 1
            ]);
    }
}