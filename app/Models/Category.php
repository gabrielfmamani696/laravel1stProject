<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /* By default, if you use Laravel naming, the Category Model will know to use 
    the categories table as a plural form of the word "category". If you have another name, 
    you can specify the table name in the Model with the protected $table property. */
    protected $table = 'categories'; 
}
