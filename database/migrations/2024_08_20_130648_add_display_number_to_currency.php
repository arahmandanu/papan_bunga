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
        if (!Schema::hasColumn('currency', 'display_number')) {
            Schema::table('currency', function (Blueprint $table) {
                $table->integer('display_number')->nullable(true)->unique();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('currency', 'display_number')) {
            Schema::table('currency', function (Blueprint $table) {
                $table->dropColumn('display_number');
            });
        }
    }
};
