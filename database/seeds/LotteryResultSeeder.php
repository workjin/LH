<?php

use Illuminate\Database\Seeder;

class LotteryResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     //    手动加入开奖记录数据
    	$data = array(
    		array('issue_num' => 101, 'issue_date' => '2017-08-29', 'number' => '12,34,24,26,48,44-04'),
    		array('issue_num' => 100, 'issue_date' => '2017-08-26', 'number' => '34,36,35,16,46,40-40',),
    		array('issue_num' => 99, 'issue_date' => '2017-08-24', 'number' => '04,47,21,10,07,28-17',),
    		);
        DB::table('lottery_results')->insert($data);

    }
}
