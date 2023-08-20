<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $primaryKey = 'id';

    // public $incrementing = false;
    public $timestamps = false;

    public function Items()
    {
        return $this->belongsTo('App\Models\Items', 'item_id', 'id');
    }
}
