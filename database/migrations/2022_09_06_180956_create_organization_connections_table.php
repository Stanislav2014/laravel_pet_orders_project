<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_connections', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('primary_organization_id');
            $table->unsignedInteger('connected_organization_id');
            $table->unsignedInteger('creator_id');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('primary_organization_id')
                ->references('id')
                ->on('organizations')
                ->onDelete('restrict');

            $table->foreign('connected_organization_id')
                ->references('id')
                ->on('organizations')
                ->onDelete('restrict');

            $table->foreign('creator_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organization_connections');
    }
}
