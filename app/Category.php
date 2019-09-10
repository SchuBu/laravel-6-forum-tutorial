<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    use NodeTrait;
}
