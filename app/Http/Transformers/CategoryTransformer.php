<?php


namespace App\Http\Transformers;


use League\Fractal\TransformerAbstract;

use TCG\Voyager\Models\Category;

class CategoryTransformer extends TransformerAbstract
{
    public function transform(Category $model)
    {
        return [
            'id' => (int) $model->id,
            'name' => $model->name,
            'slug' => $model->slug,
            'created_at' => $model->created_at
        ];
    }
}
