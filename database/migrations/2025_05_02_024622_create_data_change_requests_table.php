<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('data_change_requests', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->string('field');
            $table->text('old_value');
            $table->text('new_value');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
            
            $table->foreign('student_id')->references('student_id')->on('students');
        });
    }
};