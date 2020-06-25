<?php


namespace App\Http\Serializer;



use Spatie\Fractalistic\ArraySerializer;

class CustomSerializer extends ArraySerializer
{
    public function collection($resourceKey, array $data)
    {
        return $data;
    }

}
