
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //Agregar campo avatar a la tabla de usuarios (users)
    //
    public function up(): void
    {
        //uso metodo table cuando quiero modificar tabla existente
        Schema::table('users', function (Blueprint $table) {
            //creacion tabla avatar que puede ser null y que se posicione despues de email
            $table->String('avatar')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
            //eliminamos la columna con el metodo DropColum
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar'); 
        });
    }
};
