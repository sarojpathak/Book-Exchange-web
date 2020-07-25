<?php
/**
 * Created by PhpStorm.
 * User: saroj
 * Date: 7/23/20
 * Time: 6:10 PM
 */

namespace App\Http\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class BookDetailWithUserTransformer extends TransformerAbstract
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
            'created_at' => $model->created_at
        ];
    }
}
