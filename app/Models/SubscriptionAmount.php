<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class SubscriptionAmount extends Model
{
    use HasFactory;

    protected $table = 'subscription_amount';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id' , 'amount' ];


    public function routine(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
}
