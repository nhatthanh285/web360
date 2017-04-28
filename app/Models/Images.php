<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/26/2017
 * Time: 9:24 PM
 */

namespace App\Models;

use Eloquent as Model;

class Images extends Model
{
    public $table = 'images';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'id',
        'path',
        'post_id',
    ];

    protected $primaryKey = 'id';
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'path' => 'required',
        'post_id' => 'required',
    ];
}