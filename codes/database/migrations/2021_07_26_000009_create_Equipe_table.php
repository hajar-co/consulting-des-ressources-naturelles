<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Equipe';

    /**
     * Run the migrations.
     * @table Equipe
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idEquipe');
            $table->string('email', 85);
            $table->string('password', 25);
            $table->string('poste', 50);
            $table->mediumText('content');
            $table->unsignedInteger('specialite_idSpecialite');

            $table->index(["specialite_idSpecialite"], 'fk_Equipe_specialite1_idx');


            $table->foreign('specialite_idSpecialite', 'fk_Equipe_specialite1_idx')
                ->references('idSpecialite')->on('specialite')
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
