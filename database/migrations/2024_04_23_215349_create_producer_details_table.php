<?php
use App\Models\Productor;

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
        Schema::create('producer_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Productor::class)->constrained() ->onDelete('cascade');
            $table->text('biography');
            $table->timestamps();

        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producer_details');
    }
};
