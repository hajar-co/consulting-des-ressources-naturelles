<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Equipes';

    /**
     * Run the migrations.
     * @table Equipes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 50);
            $table->string('email', 85);
            $table->string('password', 25);
            $table->string('poste', 50);
            $table->mediumText('content');
            $table->unsignedInteger('specialites_id');
            $table->timestamps();

            $table->index(["specialites_id"], 'fk_Equipe_specialites1_idx');


            $table->foreign('specialites_id', 'fk_Equipe_specialites1_idx')
                ->references('id')->on('specialites')
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
