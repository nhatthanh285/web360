<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/22/2017
 * Time: 9:48 PM
 */
namespace App\Repositoríe\Eloquents;

use App\Models\Users;

class UsersRepository extends \Prettus\Repository\Eloquent\BaseRepository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
    ];

    /**
     * Configure the Models
     **/
    public function model()
    {
        return Users::class;
    }

    public function applySearch()
    {
        $s = app('request')->input('s');
        if($s != NULL && strlen(trim($s)) > 0 && count($this->fieldSearchable) > 0)
        {
            if(count($this->fieldSearchable) == 1)
            {
                $this->applyConditions([[$this->fieldSearchable[0], 'like', "%".$s."%"]]);
            }
            else
            {
                $this->model = $this->model->where(function($query) use($s){
                    $i = 0;
                    foreach ($this->fieldSearchable as $field) {
                        if($i == 0)
                        {
                            $query->where($field, 'like', '%'.$s.'%');
                        }
                        else{
                            $query->orWhere($field, 'like', '%'.$s.'%');
                        }
                        $i++;
                    }
                });
            }
        }
    }
}