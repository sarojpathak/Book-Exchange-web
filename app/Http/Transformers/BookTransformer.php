<?php


namespace App\Http\Transformers;


use App\Book;
use League\Fractal\TransformerAbstract;

class BookTransformer extends TransformerAbstract
{
    public function transform(Book $model)
    {
        return [
            'id' => (int) $model->id,
            'name' => $model->name,
            'description' => $model->description,
            'author' => $model->author,
            'belongs_to' => $model->belongs_to,
            'condition' => $model->condition,
            'image' => ($model->image)?url('storage/'.$model->image):null,
            'belongs' => fractal($model->userID,BookDetailWithUserTransformer::class),
            'created_at' => $model->created_at
        ];
    }
}
