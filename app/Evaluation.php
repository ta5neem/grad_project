<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{

    //

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'hand_eval_id', 'voice_eval_id','face_eval_id',
        'vedio_id'
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
