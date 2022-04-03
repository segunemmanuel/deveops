<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=> (string)$this->id,
            'type'=>'Posts',
           'attributes'=> [
               'name'=>$this->title,
               'link'=>$this->link,
               'Amount of upvotes'=>$this->votes,
               'comments'=>$this->comments,
               'post_author_name'=>$this->post_author_name,
               'created_at'=>$this->created_at,
            //    'updated_at'=>$this->updated_at,
           ]
           ];
    }
}
