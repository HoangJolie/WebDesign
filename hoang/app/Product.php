<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'product_name','product_desc','product_price','product_image'
    ];
    protected $primaryKey = 'product_id';
 	protected $table = 'product';
}
