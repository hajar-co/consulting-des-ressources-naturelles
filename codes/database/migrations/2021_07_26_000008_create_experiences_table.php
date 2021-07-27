<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'experiences';

    /**
     * Run the migrations.
     * @table experiences
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idExperience');
            $table->longText('description');
            $table->unsignedInteger('Client_idClient');

            $table->index(["Client_idClient"], 'fk_experiences_Client1_idx');


            $table->foreign('Client_idClient', 'fk_experiences_Client1_idx')
                ->references('idClient')->on('Client')
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
