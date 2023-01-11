<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $primarykey = 'id';
    protected $fillable = ['ItemtName', 'ItemPrice', 'ItemQuantity', 'ItemDescription'];
}
