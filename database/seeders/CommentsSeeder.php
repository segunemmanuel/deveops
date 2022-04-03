<?php

namespace Database\Seeders;

use App\Models\Comments;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('comments')->delete();
        $comments= array(

            [
                "post_id"=>1,
                "comment_author_name" => "lazypen",
                "content" => "This is for post 1",

            ],

            [
                "post_id"=>2,
                "comment_author_name" => "lazypen",
                "content" => "This is for post 2",

            ],
            [
                "post_id"=>3,
                "comment_author_name" => "diva1000",
                "content" => "This is for post 3",
            ],

            [
                "post_id"=>4,
                "comment_author_name" => "lena",
                "content" => "This is for post 4",
            ],

            [
                "post_id"=>5,
                "comment_author_name" => "lena",
                "content" => "This is for post 5",
            ],
        );
        foreach ($comments as $v) {
            # code...
            Comments::create($v);
        }
    }
}


