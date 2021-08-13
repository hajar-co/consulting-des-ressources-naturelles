<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Projets';

    /**
     * Run the migrations.
     * @table Projets
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
            $table->unsignedInteger('Ressources_id');
            $table->timestamps();

            $table->index(["Ressources_id"], 'fk_Projets_Ressources1_idx');


            $table->foreign('Ressources_id', 'fk_Projets_Ressources1_idx')
                ->references('id')->on('Ressources')
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
