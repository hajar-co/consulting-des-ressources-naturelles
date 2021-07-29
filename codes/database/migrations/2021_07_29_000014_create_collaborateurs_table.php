<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollaborateursTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'collaborateurs';

    /**
     * Run the migrations.
     * @table collaborateurs
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('partenaires_id');
            $table->unsignedInteger('Projets_id');
            $table->timestamps();

            $table->index(["Projets_id"], 'fk_collaborateurs_Projet1_idx');

            $table->index(["partenaires_id"], 'fk_collaborateurs_partenaires1_idx');


            $table->foreign('partenaires_id', 'fk_collaborateurs_partenaires1_idx')
                ->references('id')->on('partenaires')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('Projets_id', 'fk_collaborateurs_Projet1_idx')
                ->references('id')->on('Projets')
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
