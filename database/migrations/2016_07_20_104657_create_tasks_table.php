<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//建立 Database 資料表
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');//新增 Table 欄位
            $table->string("name");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//刪除 Database 資料表
    {
        Schema::drop('tasks');
    }
}
