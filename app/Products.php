<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['ProductName','ProductPrice', 'ProductWeight','ProductCartDesc','ProductShortDesc','ProductLongDesc','ProductThumb','ProductImage','ProductCategoryID','ProductStock'];
    public $timestamps = false;
}
