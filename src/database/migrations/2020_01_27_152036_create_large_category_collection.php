<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLargeCategoryCollection extends Migration
{
    protected $connection = 'mongodb';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->connection)
            ->table('large_category', function (Blueprint $collection) {
                $collection->index('parent_id');
                $collection->index('large_category_name');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection($this->connection)
            ->table('large_category', function (Blueprint $collection) {
                $collection->drop();
            });
    }
}
