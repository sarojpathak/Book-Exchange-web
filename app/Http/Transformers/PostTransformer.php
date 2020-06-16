<?php


namespace App\Http\Transformers;


use League\Fractal\TransformerAbstract;
use TCG\Voyager\Models\Post;

class PostTransformer extends TransformerAbstract
{
    public function transform(Post $model)
    {
        return [
            'id' => (int) $model->id,
            'category_id' =>(int) $model->category_id,
            'title' => $model->title,
            'excerpt' => $model->excerpt,
            'body' => strip_tags($model->body),
            'image' => ($model->image)?url('public/storage/'.$model->image):null,
            'slug' => $model->slug,
            'created_at' => $model->created_at,
            'category' => fractal($model->category,CategoryTransformer::class)
        ];
    }
}
