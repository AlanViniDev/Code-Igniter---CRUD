<?php

namespace App\models;
use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';

    protected $allowedFields = ['titulo' , 'slug', 'body'];

    public function getNews($id = null)
    {
        if ($id === null)
        {
            return $this->findAll();
        }
        return $this->asArray()->where(['id'=>$id])->first();
    }
}