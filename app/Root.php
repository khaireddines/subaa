<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Root extends Model
{
    protected $fillable = ['rootCategoryName','rootCategoryDescription','publicationStatus'];
}
