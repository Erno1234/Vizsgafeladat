<?php

use App\Models\Kategoria;
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
        Schema::create('kategorias', function (Blueprint $table) {
            $table->id();
            $table->string('kategoriaNev');
            $table->timestamps();
        });


        Kategoria::create(["kategoriaNev" => "környezetvédelem"]);
        Kategoria::create(["kategoriaNev" => "szemét gyűjtés"]);
        Kategoria::create(["kategoriaNev" => "szelektív gyűjtés"]);
        Kategoria::create(["kategoriaNev" => "környezetvédelmi akció"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategorias');
    }
};
