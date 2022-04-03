<?php
namespace Database\Seeders;
use App\Models\Posts;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('posts')->delete();
        $posts= array(
    [
        "title" => "This is good for Jobs",
        "link" => "www.bing.com",
        "post_author_name"=>"Mike pen"
    ],
    [
        "title" => "The politics of Donald Trump",
        "link" => "www.trump.com",
        "post_author_name"=>"Jen Psaki"
    ],

    [
        "title" => "Mary Goes to School",
        "link" => "www.usa.com",
        "post_author_name"=>"Ana A. Ross"
    ],
    [
        "title" => "Oliver Twist ",
        "link" => "naigeri.com",
        "post_author_name"=>"Colleen E. Beal"
    ],

    [
        "title" => "Days of childhood",
        "link" => "many.com",
        "post_author_name"=>"Charlotte T. Delgado"
    ],
    );

    foreach($posts as $p){
        Posts::create($p);
    }
    }
}
