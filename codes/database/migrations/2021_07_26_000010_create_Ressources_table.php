<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRessourcesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Ressources';

    /**
     * Run the migrations.
     * @table Ressources
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idRessource');
            $table->longText('probleme');
            $table->string('localisation', 45);
            $table->unsignedInteger('Client_idClient');
            $table->unsignedInteger('type_idType');

            $table->index(["Client_idClient"], 'fk_Ressources_Client1_idx');

            $table->index(["type_idType"], 'fk_Ressources_type1_idx');


            $table->foreign('Client_idClient', 'fk_Ressources_Client1_idx')
                ->references('idClient')->on('Client')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('type_idType', 'fk_Ressources_type1_idx')
                ->references('idType')->on('type')
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
