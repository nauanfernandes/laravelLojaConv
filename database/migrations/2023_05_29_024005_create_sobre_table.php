<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sobre', function (Blueprint $table) {
            $table->id();
            $table->longtext('desc');
            $table->longtext('iframe');
            $table->timestamps();
        });

        DB::table('sobre')->insert([
            'desc' => 'sobre',
            'iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.766230873792!2d-49.09678642534414!3d-22.324679117325598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bf665250000001%3A0x2abef30e2119c99a!2sInstitui%C3%A7%C3%A3o%20Toledo%20de%20Ensino%20-%20ITE!5e0!3m2!1spt-BR!2sbr!4v1685492980723!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sobre');
    }
};
