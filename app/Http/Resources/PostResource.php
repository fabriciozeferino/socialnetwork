<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CommentCollection;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        PostResource::withoutWrapping();

        return [
            'type' => 'posts',
            'id' => (string)$this->id,
            'attibutes' => [
                'title' => $this->title,
                'img_url' => $this->img_url,
                'created_at' => (string)$this->created_at,
                'comments' => CommentResource::collection(\DB::table('comments')->where("post_id", $this->id)->get()),
                'rating' => 4
            ],

        ];
    }
}
