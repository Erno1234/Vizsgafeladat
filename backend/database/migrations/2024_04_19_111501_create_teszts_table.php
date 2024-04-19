<?php

use App\Models\Teszt;
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
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->string('helyes')->default('v1');
            $table->foreignId('kategoriaId')->references('id')->on('kategorias');
            $table->timestamps();
        });


        Teszt::create([
            "kerdes" => "Mi a környezetvédelem fő célja?",
            "v1" => "A szennyezés növelése",
            "v2" => "A környezet védelme és megőrzése",
            "v3" => "Az ipari növekedés elősegítése",
            "v4" => "Egyik sem",
            "helyes" => "v2",
            "kategoriaId" => 1
        ]);

        Teszt::create([
            "kerdes" => "Mi a szemétgyűjtés fő célja?",
            "v1" => "A hulladék növelése",
            "v2" => "A környezet tisztán tartása",
            "v3" => "A hulladéktermelés elősegítése",
            "v4" => "Egyik sem",
            "helyes" => "v2",
            "kategoriaId" => 2
        ]);


        Teszt::create([
            "kerdes" => "Mi a szelektív gyűjtés célja?",
            "v1" => "A hulladék növelése",
            "v2" => "A hulladék szelektálása újrahasznosítás céljából",
            "v3" => "A hulladéktermelés elősegítése",
            "v4" => "Egyik sem",
            "helyes" => "v2",
            "kategoriaId" => 3
        ]);

        Teszt::create([
            "kerdes" => "Mi a környezetvédelmi intézkedések fő célja?",
            "v1" => "A szennyezés elősegítése",
            "v2" => "A környezet védelme és javítása",
            "v3" => "A környezeti problémák figyelmen kívül hagyása",
            "v4" => "Egyik sem",
            "helyes" => "v2",
            "kategoriaId" => 4
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
