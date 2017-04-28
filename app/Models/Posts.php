<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/25/2017
 * Time: 11:37 PM
 */

namespace App\Models;

use Eloquent as Model;
class Posts extends Model
{
    public $table = 'posts';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'title',
        'content',
        'area',
        'district',
        'city',
        'type_of_customer',
        'type_of_realestate',
        'group_post',
    ];

    protected $primaryKey = 'id';
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'content' => 'required',
        'area' => 'required',
        'type_of_customer' => 'required',
        'type_of_realestate' => 'required',
        'group_post' => 'required',
    ];
}