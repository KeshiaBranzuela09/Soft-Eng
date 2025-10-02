<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id'); // BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('usn', 100)->unique(); // ensure USN unique
            $table->string('email', 150)->unique();
            $table->string('password', 255); // use "password" (Laravel expects this)
            $table->string('phone_number', 20)->nullable();
            $table->tinyInteger('role')->default(0)->comment('0=student,1=teacher,2=admin');
            $table->string('profile_picture', 255)->nullable();
            $table->timestamp('last_login')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps(); // created_at & updated_at
            $table->softDeletes(); // optional: deleted_at column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
    
};
