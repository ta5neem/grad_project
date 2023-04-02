<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('hand_eval_id');
            $table->unsignedBigInteger('voice_eval_id');            
            $table->unsignedBigInteger('face_eval_id');
            $table->unsignedBigInteger('vedio_id');

            $table->foreign('hand_eval_id')
            ->references('id')->on('hand_evals')
            ->onDelete('cascade'); 
            
            $table->foreign('voice_eval_id')
            ->references('id')->on('voice_evals')
            ->onDelete('cascade');  

            $table->foreign('face_eval_id')
            ->references('id')->on('face_evals')
            ->onDelete('cascade'); 

            $table->foreign('vedio_id')
            ->references('id')->on('vedios')
            ->onDelete('cascade'); 


            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluations');
    }
}
