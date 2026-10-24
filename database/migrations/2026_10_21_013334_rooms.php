<?php

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
        Schema::create("rooms", function (Blueprint $table) {
            $table->id();
            $table->integer("name")->unique();
            $table->text("description");
            $table->integer("type_id");
        });
    }
    public function type_rooms(){
        return $this->hasOne(type_rooms::class);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
