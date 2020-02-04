<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmojiCollection extends Migration
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
            ->table('emoji', function (Blueprint $collection) {
                $collection->index('name');
                $collection->unique('url');
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
            ->table('emoji', function (Blueprint $collection) {
                $collection->drop();
            });
    }
}
