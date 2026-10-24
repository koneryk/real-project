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
        Schema::create('type_rooms', function (Blueprint $table) {
            $table->id();
            $table->string("name");
        });
    }
    public function rooms(){
        return $this->belongsTo(type_rooms::class);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
