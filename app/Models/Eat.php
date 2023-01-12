<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eat extends Model
{
    use HasFactory;
    protected $table = 'eat';
    protected $primaryKey = 'id';
    protected $fillable = ['category', 'picture', 'discount', 'rate', 'name', 'pricebefore', 'price', 'location', 'numlocation', 'numbought'];
}