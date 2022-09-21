<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restrictedmedicine extends Model
{
    use HasFactory;
    protected $fillable=['name', 'cost', 'existence', 'laboratory', 'active_principle', 'prescriptioncode'];
}
