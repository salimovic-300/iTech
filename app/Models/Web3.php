<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Web3 extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'crypto_address'];
}
