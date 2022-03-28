<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'type'=>'Comments',
           'attributes'=> [
               'name of poster'=>$this->comment_author_name,
               'post_id'=>$this->post_id,
               'content'=>$this->content,
               'created_at'=>$this->created_at,
            //    'updated_at'=>$this->updated_at,
           ]
           ];
    }

}
