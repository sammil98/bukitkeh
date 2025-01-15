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
        Schema::table('news', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
        });
        Schema::table('destinations', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
        });
        Schema::table('facilities', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
        });
        Schema::table('galleries', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
        });
        Schema::table('aparaturs', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
        });
        Schema::table('statistics', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
        });
        Schema::table('payment_informations', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
        });
        Schema::table('incomes', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
        Schema::table('destinations', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
        Schema::table('facilities', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
        Schema::table('galleries', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
        Schema::table('aparaturs', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
        Schema::table('statistics', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
        Schema::table('payment_informations', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
        Schema::table('incomes', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
