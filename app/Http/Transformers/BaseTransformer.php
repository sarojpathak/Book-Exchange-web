<?php

namespace App\Http\Transformers;


use League\Fractal\TransformerAbstract;

class BaseTransformer extends TransformerAbstract
{
    public $includeRelations = false;
}
