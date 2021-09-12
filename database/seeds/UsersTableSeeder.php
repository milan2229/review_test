<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'ネイシ',
                    'email'=>'a@a.com',
                    'iscool'=>'0',
                    'birthday'=>'2000-10-10',
                ],
            ] 
    );
}

}