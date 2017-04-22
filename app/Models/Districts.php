<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/22/2017
 * Time: 10:43 PM
 */

namespace App\Models;

use Eloquent as Model;

class Districts extends Model
{
    public $table = 'districts';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'name',
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'city_id'=>'integer',
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