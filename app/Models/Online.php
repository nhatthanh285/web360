<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/2/2017
 * Time: 8:48 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Online extends Model
{
    public $table = 'sessions';

    public $timestamps = false;

    public function scopeGuests($query)
    {
        return $query->whereNull('user_id');
    }

    /**
     * Returns all the registered users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRegistered($query)
    {
        return $query->whereNotNull('user_id')->with('user');
    }

    /**
     * Updates the session of the current user.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUpdateCurrent($query)
    {
        return $query->where('id', Session::getId())->update(array(
            'user_id' => Sentry::check() ? Sentry::getUser()->id : null
        ));
    }

    /**
     * Returns the user that belongs to this entry.
     *     *
     */
    public function user()
    {
        return $this->belongsTo('Cartalyst\Sentry\Users\EloquentUser'); # Sentry 3
        // return $this->belongsTo('Cartalyst\Sentry\Users\Eloquent\User'); # Sentry 2
    }
}