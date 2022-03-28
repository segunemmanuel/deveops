<?php

namespace Database\Seeders;

use App\Models\Upvotes;

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
        //

        Upvotes::create(
            [

                'post_id'=>2,
                'upvotes'=>11,
            ],

            [
                'post_id'=>3,
                'upvotes'=>100,
            ],
            [
                'post_id'=>4,
                'upvotes'=>100,
            ],
            );
    }
}
