<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartenairesHasProjetTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'partenaires_has_Projet';

    /**
     * Run the migrations.
     * @table partenaires_has_Projet
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('partenaires_idPartenaire');
            $table->unsignedInteger('Projet_idProjet');

            $table->index(["Projet_idProjet"], 'fk_partenaires_has_Projet_Projet1_idx');

            $table->index(["partenaires_idPartenaire"], 'fk_partenaires_has_Projet_partenaires1_idx');


            $table->foreign('partenaires_idPartenaire', 'fk_partenaires_has_Projet_partenaires1_idx')
                ->references('idPartenaire')->on('partenaires')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('Projet_idProjet', 'fk_partenaires_has_Projet_Projet1_idx')
                ->references('idProjet')->on('Projet')
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
