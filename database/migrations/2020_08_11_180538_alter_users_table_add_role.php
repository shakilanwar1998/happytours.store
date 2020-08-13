<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use DB;
class AlterUsersTableAddRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function (Blueprint $table) {
          $table->integer('role')->default(2);
      });

      // DB::Statement("INSERT INTO users (id, name`, `city`, `country_code`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, 'Admin', 'Dhaka', '1', 'admin@happytours.store', NULL, '$2y$10$cyVgpI4fwPUhZAjj7YxIr.LwonVxhnmCwF7JoA5j2uI9tns96rb5.', NULL, '2020-08-11 18:04:06', '2020-08-11 18:04:06')");
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
