<?php

namespace Database\Seeders;

use App\Models\Comments;

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
        Comments::create(
            // [
            //     "post_id"=>2,
            //     "comment_author_name" => "lazypen",
            //     "content" => "This is for post 2",

            // ],
            // [
            //     "post_id"=>3,
            //     "comment_author_name" => "diva1000",
            //     "content" => "This is for post 3",
            // ],

            [
                "post_id"=>3,
                "comment_author_name" => "lena",
                "content" => "This is for post 3",
            ],
        );
    }
}


