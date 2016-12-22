<?php

namespace App\Domains;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Category', 'ProductName', 'ProductLink', 'ImageUrl', 'UnitPrice', 'UnitSold', 'StartDate', 'EndDate', 'Revenue', 'Company', 'Country', 'Status', 'merchant', 'last_fixed'];
}
