<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $primaryKey = 'id';

    // public $incrementing = false;
    public $timestamps = false;

    public function Kinds()
    {
        return $this->belongsTo('App\Models\Kinds', 'kinds_id', 'id');
    }
}
