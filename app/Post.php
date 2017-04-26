<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="posts";
    protected $fillable=['title','region','town','mark','model','size','trial','owner', 'price', 'image', 'text', 'author_id'];
    protected $guarded = array('id');
}
