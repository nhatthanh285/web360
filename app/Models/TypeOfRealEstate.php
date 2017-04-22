<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/22/2017
 * Time: 10:37 PM
 */

namespace App\Models;

use Eloquent as Model;

class TypeOfRealEstate extends Model
{
    public $table = 'type_of_realestate';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'name',
        'group_post',
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'group_post'=>'integer',
    ];
    protected $primaryKey = 'id';
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
}