<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
   protected $fillable = ['book_id','user_id','price','quantity']; 
    use HasFactory;
}
