<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostsResource;
use App\Http\Resources\UpvoteResource;
use App\Models\Posts;
use App\Models\Upvotes;
use Illuminate\Http\Request;

class UpvoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return new UpvoteResource()\

        // return UpvoteResource::collection(Upvotes::all());
        return UpvoteResource::collection(Upvotes::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return "Yes";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(Upvotes $upvote)
    // {
    //     //
    //     return new UpvoteResource($upvote);
    // }



      /**
     * Display the specified resource.
     *
     * @string App\Posts $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Upvotes $upvote)
    {

        // new Posts();
$find_v=Upvotes::where('post_id',$upvote)->first();
// return $find_v->tojson();
return new PostsResource($find_v);
// SELECT From upvote wjhere post_id ==1

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
