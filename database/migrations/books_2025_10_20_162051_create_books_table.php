<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table)
        {
            $table->id();
            $table->string('book_title', 40);
            $table->integer('year_of_publication');
            $table->text('bio')->nullable();
            $table->softDeletes();
            $table->timestamps();
        }
        );
    }
    public function down(): void
    {

    }
};
