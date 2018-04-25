<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$color = ['红','青','蓝','白','黑','黄'];

        for($i=1;$i<=30;$i++){
        	DB::table('goods')->insert([
                'gName'=>str_random(10),
        		'gPrice'=>rand(10,100000),
        		'gImg'=>rand(1,100).'.jpg',
        		'gStock'=>rand(0,2420),
        		'isSale'=>rand(0,1),
        		'isBest'=>rand(0,1),
        		'isHot'=>rand(0,1),
        		'isNew'=>rand(0,1),
        		'cate_id'=>rand(1,20),
        		'brand_id'=>rand(0,10),
        		'gDesc'=>str_random(50),
        		'saleNum'=>rand(0,1000),
        		'visitNum'=>rand(0,1000),
        		'appraiseNum'=>rand(0,1000),
        		'gColor'=>$color[rand(0,5)],
        		'gSize'=>'36,37,38,39,40,41,42,43',
        		'created_at'=>date('Y-m-d H:i:s'),
        		'updated_at'=>date('Y-m-d H:i:s'),
        	]);
        }
    }
}
