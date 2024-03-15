<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Cashier\Billable;
use Laravel\Cashier\Subscription;
use App\Models\{Plan};

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , HasRoles , Billable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function latestSubscription()
    {
        return $this->hasOne(Subscription::class , 'user_id' , 'id')->orderBy('id' , 'desc');
    }

    public function plans()
    {
        return $this->hasMany(Plan::class , 'user_id' , 'id');
    }

    public function activePlan()
    {
        return $this->hasOne(Plan::class , 'user_id' , 'id')->where('status' , 1);
    }

}
