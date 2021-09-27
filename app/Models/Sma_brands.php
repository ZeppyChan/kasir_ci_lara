<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sma_brands extends Model
{
    protected $fillable = ['code','name','image'];
    use HasFactory;
}
