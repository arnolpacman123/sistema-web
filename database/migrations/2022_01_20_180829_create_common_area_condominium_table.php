<?php

use App\Models\CommonArea;
use App\Models\Condominium;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommonAreaCondominiumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('common_area_condominium', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CommonArea::class);
            $table->foreignIdFor(Condominium::class)->constrained('condominiums');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('common_area_condominium');
    }
}
