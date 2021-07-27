<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Projet';

    /**
     * Run the migrations.
     * @table Projet
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idProjet');
            $table->longText('image');
            $table->string('title', 250);
            $table->longText('content');
            $table->date('date');
            $table->unsignedInteger('Ressources_idRessource');
            $table->unsignedInteger('Equipe_idEquipe');

            $table->index(["Ressources_idRessource"], 'fk_Projet_Ressources1_idx');

            $table->index(["Equipe_idEquipe"], 'fk_Projet_Equipe1_idx');


            $table->foreign('Ressources_idRessource', 'fk_Projet_Ressources1_idx')
                ->references('idRessource')->on('Ressources')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('Equipe_idEquipe', 'fk_Projet_Equipe1_idx')
                ->references('idEquipe')->on('Equipe')
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
