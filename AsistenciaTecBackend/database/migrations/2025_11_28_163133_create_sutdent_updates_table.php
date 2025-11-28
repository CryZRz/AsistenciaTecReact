<?php

use App\AuditoryColumns;
use App\Models\Career;
use App\Models\Period;
use App\Models\Student;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use AuditoryColumns;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sutdent_updates', function (Blueprint $table) {
            $table->id();
            $table->string("control_number");
            $table->unsignedInteger("smester");
            $table->foreignIdFor(Period::class);
            $table->foreignIdFor(Career::class);
            $table->foreignIdFor(Student::class);
            $this->auditoryFill($table);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sutdent_updates');
    }
};
