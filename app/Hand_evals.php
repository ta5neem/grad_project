<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hand_evals extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  

    protected $fillable = [
        'arm_closed', 'hand_crossed','hand_opend',
        'sholder'
    ];


    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
