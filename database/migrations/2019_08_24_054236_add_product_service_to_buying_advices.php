<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductServiceToBuyingAdvices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('buying_advices', function (Blueprint $table) {
            $table->unsignedBigInteger('business_profile_article_id')->after('article_sub_category_id');
            $table->foreign('business_profile_article_id')
                ->references('id')
                ->on('business_profile_articles')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buying_advices', function (Blueprint $table) {
            $table->dropColumn('business_profile_article_id');
        });
    }
}
