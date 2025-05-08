<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('nim')->unique()->after('student_id');
            $table->string('department')->after('name');
            $table->string('major')->after('department');
            $table->string('phone')->after('major');
        });
    }

    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn(['nim', 'department', 'major', 'phone']);
        });
    }
};