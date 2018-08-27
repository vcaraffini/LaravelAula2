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
          'title'=>'bla',
          'description'=>'bla',
          'author'=>'bla'
          ]);
        Mensagem::create([
            'title'=>'bla',
            'description'=>'bla',
            'author'=>'bla'
            ]);
        Mensagem::create([
            'title'=>'bla',
            'description'=>'bla',
            'author'=>'bla'
            ]);
        Mensagem::create([
            'title'=>'bla',
            'description'=>'bla',
            'author'=>'bla'
            ]);
        Mensagem::create([
            'title'=>'bla',
            'description'=>'bla',
            'author'=>'bla'
            ]);
    }
}