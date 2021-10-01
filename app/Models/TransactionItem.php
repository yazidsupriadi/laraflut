<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TransactionItem extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'quantity',
        'products_id',
        'transactions_id',
        'user_id'
    ];

    public function product(){
        return $this->hasOne(User::class,'id','products_id');
    }

}
