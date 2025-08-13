<?php

use App\Models\Address;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
          //  $table->foreignIdFor(Class::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Address::class)->constrained()->cascadeOnDelete();
//            $table->foreignIdFor(Contract::class)->constrained()->cascadeOnDelete();
//            $table->foreignIdFor(Photo::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('guardian');
            $table->string('student_phone');
            $table->string('guardian_phone');
            $table->string('cpf');
            $table->string('email');
            $table->date('start_period');
            $table->date('end_period');
            $table->integer('total_students');
            $table->decimal('tuition_value', 10, 2);
            $table->integer('installments_qty');
            $table->integer('due_day');
            $table->string('uniform_size');
            $table->string('instagram')->nullable();
            $table->string('favorite_music_primary')->nullable();
            $table->string('favorite_music_secondary')->nullable();
            $table->date('contract_date');
            $table->string('school_year', 9);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
