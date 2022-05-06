<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  以下のコードを追加
        DB::table('posts')->insert([
            'posts' => 'つぶやいた内容を表示します。',
            'user_id' => '1'
        ],
    ['posts' => 'つぶやきを表示します。',
    'user_id' => '2'] );
    }
}
