<?php


namespace App\Http\Transformers;


use App\Exchange;
use League\Fractal\TransformerAbstract;

class ExchangeTransformer extends TransformerAbstract
{
    public function transform(Exchange $model)
    {
        return [
            'id' => (int) $model->id,
            'book_wanted' => fractal($model->wantedId,BookTransformer::class),
            'book_offered' => fractal($model->offeredId,BookTransformer::class),
            'requested_by' =>fractal($model->requestedBy,UserTransformer::class),
            'requested_to' => fractal($model->requestedTo,UserTransformer::class),
            'status' => $model->status,
            'created_at' => $model->created_at
        ];
    }
}
