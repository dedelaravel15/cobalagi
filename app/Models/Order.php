<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
            'user_id',
            'cart_id',
            'postman'
    ];
    public function transactions()
    {
        return $this->belongsTo(Transaction::class, 'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
