<?php


namespace App\Http\Transformers;


use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $model)
    {
        return [
            'id' => (int) $model->id,
            'name' => $model->name,
            'email' => $model->email,
            'phone' => $model->phone,
            'address' => $model->address,
            'avatar' => ($model->avatar)?url('storage/'.$model->avatar):null,
            'belongs' => fractal($model->bookId,BookTransformer::class),
            'created_at' => $model->created_at
        ];
    }
}
