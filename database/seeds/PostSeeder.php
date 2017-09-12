<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //加入帖子信息
        $data = array(
            array('issue_num'=>101, 'platform'=>2, 'title'=>'继续大中' , 'body'=>'虎牛鼠狗鸡猴' , 'id_uploader'=>1, 'like'=>50, 'view'=>60, 'predict_result'=>0, 'predict_type'=>1, 'created_at'=> '2017-08-29'),
            array('issue_num'=>101, 'platform'=>2, 'title'=>'必中四肖' , 'body'=>'龙蛇鸡猴' , 'id_uploader'=>2, 'like'=>30, 'view'=>75, 'predict_result'=>1, 'predict_type'=>1, 'created_at'=> '2017-08-26'),
            array('issue_num'=>100, 'platform'=>2, 'title'=>'必中十码' , 'body'=>'1,5,11,15,19,20,22,25,29,30' , 'id_uploader'=>1, 'like'=>59, 'view'=>63, 'predict_result'=>1, 'predict_type'=>2, 'created_at'=>'2017-08-20'),
            array('issue_num'=>100, 'platform'=>2, 'title'=>'必中三码' , 'body'=>'2,15,30' , 'id_uploader'=>2, 'like'=>60, 'view'=>68, 'predict_result'=>1, 'predict_type'=>2, 'created_at'=> '2017-08-20'),
            );
        DB::table('posts')->insert($data);


        //随机生成
        // factory(App\Post::class, 5)->create()->each(function ($u) {
        //     $u->posts()->save(factory(App\Post::class)->make());
        // });
    }
}
