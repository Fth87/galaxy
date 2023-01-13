<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

use function App\Http\Controllers\generateRandomNumber;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */



    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('username')->default('belum');
            $table->string('nisn')->unique();
            $table->string('telp');
            $table->string('sekolah');
            $table->string('jk');
            $table->string('type');
            $table->string('image')->nullable();
            $table->string('email');
            $table->string('nomor_peserta')->default('belum');
            $table->string('password_peserta')->default('belum');
            $table->boolean('is_admin')->default(false);
            $table->boolean('status_pembayaran')->default(false);
            $table->string('is_lolos')->default('belum'); //belum / lolos / tidak;
            $table->integer('kode');
            // $table->timestamp('email_verified_at')->nullable();
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
};
