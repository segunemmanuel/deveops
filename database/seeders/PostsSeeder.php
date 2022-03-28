<?php

namespace Database\Seeders;

use App\Models\Posts;



use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Posts::create(


    [
        "title" => "This is good for Jobs",
        "link" => "www.bing.com",
        "upvotes" => 0,
        "post_author_name"=>"Mike pen"
    ],
    [
        "title" => "The politics of Donald Trump",
        "link" => "www.trump.com",
        "upvotes" => 21,
        "post_author_name"=>"Jen Psaki"
    ]

    );

    }
}

// $table->id();
// $table->string('title');
// $table->string('link');
// $table->integer('upvotes');
// $table->string('post_author_name');
// $table->timestamps();
