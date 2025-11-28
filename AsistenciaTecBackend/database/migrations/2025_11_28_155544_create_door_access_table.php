<?php

use App\AuditoryColumns;
use App\Models\Campus;
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
        Schema::create('door_access', function (Blueprint $table) {
            $table->id();
            $table->string('name', length:40);
            $table->foreignIdFor(Campus::class);

            $this->auditoryFill($table);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('door_access');
    }
};
