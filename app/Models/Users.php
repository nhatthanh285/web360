<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/22/2017
 * Time: 10:17 PM
 */
namespace App\Models;

use Eloquent as Model;

class Users extends Model
{
    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'password',
        'email',
        'phone',
        'address',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'password' => 'string',
        'email'=>'email|unique:users,email',
        'phone'=>'phone|unieque:users,phone',
        'remember_token' => 'string',
    ];
    protected $primaryKey = 'id';
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
//    public function permissions()
//    {
//        return $this->belongsToMany(\App\Models\Permission::class, 'user_has_permissions');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function save(array $options = [])
    {
        if(is_null($this->id)){
            $this->password = bcrypt($this->password);
        }

        return parent::save($options);
    }

//    public function roles()
//    {
//        return $this->belongsToMany(\App\Models\Roles::class, 'user_has_roles', 'user_id', 'role_id');
//    }
}