<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterContactsTable extends Migration
{
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            // Add the columns if they don't exist
            if (!Schema::hasColumn('contacts', 'name')) {
                $table->string('name')->after('id');
            }
            if (!Schema::hasColumn('contacts', 'email')) {
                $table->string('email')->after('name');
            }
            if (!Schema::hasColumn('contacts', 'message')) {
                $table->text('message')->after('email');
            }
        });
    }

    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn(['name', 'email', 'message']);
        });
    }
}
