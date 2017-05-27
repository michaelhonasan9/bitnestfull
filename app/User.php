<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Hash;

/**
 * Class User
 *
 * @package App
 * @property string $name
 * @property string $username
 * @property string $mobile
 * @property string $email
 * @property string $password
 * @property string $role
 * @property string $remember_token
 * @property string $referred
 * @property integer $points
*/
class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['name', 'username', 'mobile', 'email', 'password', 'remember_token', 'points', 'role_id', 'referred_id'];
    
    
    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setRoleIdAttribute($input)
    {
        $this->attributes['role_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setReferredIdAttribute($input)
    {
        $this->attributes['referred_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setPointsAttribute($input)
    {
        $this->attributes['points'] = $input ? $input : null;
    }
    
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
    
    public function referred()
    {
        return $this->belongsTo(User::class, 'referred_id');
    }
    
    
    
}
