<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('receive_emails')->nullable();
            $table->string('receive_updates')->nullable();
            $table->string('receive_offers')->nullable();
            $table->string('country')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('receive_emails');
            $table->dropColumn('receive_updates');
            $table->dropColumn('receive_offers');
            $table->dropColumn('country');
        });
    }
};
