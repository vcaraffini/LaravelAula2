<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class AddAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('title');
            $table->string('description');
            $table->dateTime('scheduledto'); 
            $table->integer('user_id')->unsigned();   
            $table->timestamps();                 
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atividades', function (Blueprint $table) {
            //
        });
    }
}