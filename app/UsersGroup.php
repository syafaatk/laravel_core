<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersGroup extends Model  
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users_group';

    protected $primaryKey = 'users_group_id';
    
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['users_group_id', 'users_group_alias', 'users_group_name', 'users_group_status', 'users_group_access', 'user_group_default_pages', 'users_group_is_default', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

}
