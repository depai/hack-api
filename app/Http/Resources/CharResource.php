<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CharResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $data = [
            'id' => $this->id,
            'word' => $this->word, 
            'read' => $this->read,
            'note' => $this->note, 
            'image' => $this->image, 
            'book' => $this->book, 
            'meaning' => $this->meaning,
            'comment' => new CommentCollection($this->comments)
        ];
        return $data;
    }
}
