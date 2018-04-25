<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gName',50)->comment('商品名称');
            $table->integer('gPrice')->comment('商品价格');
            $table->string('gImg',50)->comment('商品图片');
            $table->integer('gStock')->comment('商品库存');
            $table->tinyInteger('isSale')->default(1)->comment('是否上架，0不上，1上架');
            $table->tinyInteger('isBest')->default(0)->comment('是否精品，0否，1是');
            $table->tinyInteger('isHot')->default(0)->comment('是否热销，0否，1是');
            $table->tinyInteger('isNew')->default(0)->comment('是否新品，0否，1是');
            $table->integer('cate_id')->comment('所属类别');
            $table->integer('brand_id')->comment('品牌id');
            $table->integer('saleNum')->default(0)->comment('总销售量');
            $table->text('gDesc')->comment('商品描述');
            $table->integer('visitNum')->default(0)->comment('浏览量');
            $table->integer('appraiseNum')->default(0)->comment('评价量');
            $table->string('gSize')->comment('尺码');
            $table->string('gColor')->comment('商品颜色');
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
        Schema::drop('goods');
    }
}
