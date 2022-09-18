<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miscellany extends Model
{
    use HasFactory;
    protected $fillable=['name', 'cost', 'existence', 'type', 'description', 'brand'];
}