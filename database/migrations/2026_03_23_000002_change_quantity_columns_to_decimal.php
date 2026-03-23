<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement("ALTER TABLE products MODIFY stock_quantity DECIMAL(10,3) NOT NULL DEFAULT 0");
        DB::statement("ALTER TABLE products MODIFY total_quantity DECIMAL(10,3) NOT NULL DEFAULT 0");
        DB::statement("ALTER TABLE sale_items MODIFY quantity DECIMAL(10,3) NOT NULL");
        DB::statement("ALTER TABLE stock_transactions MODIFY quantity DECIMAL(10,3) NOT NULL");
    }

    public function down(): void
    {
        DB::statement("ALTER TABLE products MODIFY stock_quantity INT NOT NULL DEFAULT 0");
        DB::statement("ALTER TABLE products MODIFY total_quantity INT NOT NULL DEFAULT 0");
        DB::statement("ALTER TABLE sale_items MODIFY quantity INT NOT NULL");
        DB::statement("ALTER TABLE stock_transactions MODIFY quantity INT NOT NULL");
    }
};
