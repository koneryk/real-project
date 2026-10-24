<?php

use App\Models\Comment;
use App\Models\type_rooms;
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
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("room_id");
            $table->foreignId('comment_id');
            $table->Time('time');
            $table->string('pay');
            $table->string('status')->default('Новая');

        });
    }
    public function rooms(){
        return $this->hasOne(type_rooms::class);
    }
    public function comments(){
        return $this->hasOne(comment::class);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
