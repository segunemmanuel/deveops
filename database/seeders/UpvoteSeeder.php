<?php

namespace Database\Seeders;

use App\Models\Upvotes;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class UpvoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('upvotes')->delete();
    $upvotes=
    [
            [

                'post_id'=>1,
                'upvotes'=>11,
            ],

            [
                'post_id'=>2,
                'upvotes'=>90,
            ],
            [
                'post_id'=>3,
                'upvotes'=>7,
            ],
            [
                'post_id'=>4,
                'upvotes'=>50,
            ],

            [
                'post_id'=>5,
                'upvotes'=>2,
            ],

            [
                'post_id'=>12,
                'upvotes'=>10,
            ]
            ];
            // add loop

        foreach ($upvotes as $v)
            Upvotes::create($v);
    }
}
