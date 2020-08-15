<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCountriesTableAddLatlong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('countries', function (Blueprint $table) {
          $table->dropColumn('created_at');
          $table->dropColumn('updated_at');
          $table->string('lat');
          $table->string('long');
      });

      Schema::table('place_guidelines', function (Blueprint $table) {
          $table->dropColumn('created_at');
          $table->dropColumn('updated_at');
          $table->dropColumn('deleted_at');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
