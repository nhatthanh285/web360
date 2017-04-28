<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/25/2017
 * Time: 11:36 PM
 */

namespace App\Repositories\Eloquents;

use App\Models\Posts;
class PostsRepository extends \Prettus\Repository\Eloquent\BaseRepository
{

    protected $fieldSearchable = [
        'title',
        'content',
        'area',
    ];

    /**
     * Specify Models class name
     *
     * @return string
     */
    public function model()
    {

        return Posts::class;
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

    public function findWithoutFail($id, $columns = ['*'])
    {
        try {
            return $this->find($id, $columns);
        } catch (Exception $e) {
            return;
        }
    }
}