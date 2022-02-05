<?php
namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name' ,'email','address','city' ,'state'  ,
        'country',
        'pincode',
        'mobile' ,
        'password',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function Store_Validation()
    {
        return [
            'name' => 'nullable',
            'email' => 'nullable',
            'address' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable' ,
            'country' => 'nullable',
            'pincode' => 'nullable',
            'mobile' => 'nullable',
            'password' => 'nullable',

        ];
    }
  public static function login_Validation()
    {
        return [
            'email' => 'nullable',
            'password' => 'nullable',
 ];
    }



}
