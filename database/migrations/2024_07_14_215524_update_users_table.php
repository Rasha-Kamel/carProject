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
        Schema::table('users', function (Blueprint $table) {
        
            $table->string('user_name')->after('name')->unique();
            $table->string('active',length:100)->after('password')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
        
            $table->dropColumn('user_name');
            $table->dropColumn('active');
            
        });
    }
};
