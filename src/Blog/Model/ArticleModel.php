<?php

namespace Blog\Model;

use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    protected $table = 'article';

    protected $primaryKey = 'article_id';
    public $timestamps = false;

    protected $fillable = [
        'article_title',
    ];

    public function getUrl()
    {
        return '/'.$this->article_id;
    }
}
