<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');

            /**by
             * medium text column type
             * https://laravel.com/docs/8.x/migrations#column-method-mediumText
             */
            
            $table->mediumText('project_summary');

            /**by
             * column type datetime usage
             * https://laravel.com/docs/8.x/migrations#column-method-dateTime
             */

            $table->date('project_starting_date',$precision=0);
            $table->date('project_finishing_date',$precision=0);
            $table->foreignId('users_id')->constrained();
            $table->foreignId('companies_id')->constrained('companies')->onDelete('cascade');
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
        Schema::dropIfExists('projects');
    }
}
