<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->enum('role',['staff','admin'])->default('staff');
            $table->enum('status',['active','deactivated'])->default('deactivated');
            $table->enum('building',['granted','revoked'])->default('revoked');
            $table->enum('civil',['granted','revoked'])->default('revoked');
            $table->enum('electrical',['granted','revoked'])->default('revoked');
            $table->enum('electronics',['granted','revoked'])->default('revoked');
            $table->enum('mechanical',['granted','revoked'])->default('revoked');
            $table->enum('plumbing',['granted','revoked'])->default('revoked');
            $table->enum('editaccess',['granted','revoked'])->default('revoked');
            $table->text('about')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
