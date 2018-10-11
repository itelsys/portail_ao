<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppelOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appel_offres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Id_Ao');
            $table->string('Objet');
            $table->string('Caution_Provisoire');
            $table->string('Type_Annonce');
            $table->string('Prix_Acquisition_Plans');
            $table->string('Date_Limite_Remise_Plans');
            $table->string('PME');
            $table->string('Lieu_Execution');
            $table->string('Contact');
            $table->string('URL_AO');
            $table->string('DCE_FILENAME');
            $table->string('Estimation');
            $table->string('Categorie');
            $table->string('Proce_dure');
            $table->string('Reference');
            $table->string('Acheteur');
            $table->string('Est_Modifie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appel_offres');
    }
}
