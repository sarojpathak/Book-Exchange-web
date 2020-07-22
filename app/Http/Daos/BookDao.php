<?php


namespace App\Http\Daos;


use App\Book;

class BookDao extends BaseDao
{
    public function __construct(Book $model)
    {
        $this->model = $model;
    }

    public function getAllBookByUser($userId){
        return $this->model->where('belongs_to',$userId)->orderBy('created_at','DESC')->get();
    }

    public function getBoookData($bookId)
    {
        return $this->model->where('id',$bookId)->orderBy('created_at','DESC')->get();
    }
}
