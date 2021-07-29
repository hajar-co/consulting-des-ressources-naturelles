<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActualitiesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Actualities';

    /**
     * Run the migrations.
     * @table Actualities
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->longText('image');
            $table->string('title', 250);
            $table->longText('content');
            $table->date('date');
            $table->unsignedInteger('Equipes_id');
            $table->timestamps();

            $table->index(["Equipes_id"], 'fk_Actualities_Equipe1_idx');


            $table->foreign('Equipes_id', 'fk_Actualities_Equipe1_idx')
                ->references('id')->on('Equipes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
