<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'treatment',
        'address',
        'total'
    ];

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
