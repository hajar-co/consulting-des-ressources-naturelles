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
            $table->string('telephone', 30)->nullable();
            $table->unsignedInteger('users_id');
            $table->unsignedInteger('types_id');
            $table->timestamps();

            $table->index(["users_id"], 'fk_Ressources_users1_idx');

            $table->index(["types_id"], 'fk_Ressources_types1_idx');


            $table->foreign('users_id', 'fk_Ressources_users1_idx')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('types_id', 'fk_Ressources_types1_idx')
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
