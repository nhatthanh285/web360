<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/22/2017
 * Time: 10:41 PM
 */

namespace App\Models;

use Eloquent as Model;

class Cities extends Model
{
    public $table = 'cities';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'name',
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
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