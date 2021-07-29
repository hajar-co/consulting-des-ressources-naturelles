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
            $table->increments('id');
            $table->longText('probleme');
            $table->string('localisation', 45);
            $table->unsignedInteger('Clients_id');
            $table->unsignedInteger('types_id');
            $table->timestamps();

            $table->index(["Clients_id"], 'fk_Ressources_Client1_idx');

            $table->index(["types_id"], 'fk_Ressources_type1_idx');


            $table->foreign('Clients_id', 'fk_Ressources_Client1_idx')
                ->references('id')->on('Clients')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('types_id', 'fk_Ressources_type1_idx')
                ->references('id')->on('types')
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
