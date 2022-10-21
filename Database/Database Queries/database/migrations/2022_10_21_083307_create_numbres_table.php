<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numbres', function (Blueprint $table) {
            $table->increments('id_phone');
            $table->string('phone')->nullable();
        });

        Schema::create('ContactPerson', function (Blueprint $table) {
            $table->increments("id");
            $table->string('Nom')->nullable();
            $table->unsignedInteger('Phone')->nullable();
            $table->foreign('Phone')
            ->references('id_phone')
            ->on('numbres')
            ->onDelete('cascade');
        });
    }

 /**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('numbres');
    Schema::dropIfExists('ContactPerson');
}
};
