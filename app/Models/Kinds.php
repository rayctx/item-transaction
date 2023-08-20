<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kinds extends Model
{
    use HasFactory;

    protected $table = 'kinds';
    protected $primaryKey = 'id';

    // public $incrementing = false;
    public $timestamps = false;
}
