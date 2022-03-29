<?php

namespace App\Models\It;

use Illuminate\Database\Eloquent\Model;

class ItLogError extends Model  
{

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'it_log_error';
    protected $primaryKey = 'it_log_error_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['it_log_error_id', 'users_id', 'it_log_error_form', 'it_log_error_url', 'it_log_error_message', 'it_log_error_exception', 'it_log_error_file', 'it_log_error_line', 'it_log_error_trace', 'it_log_error_json', 'it_log_error_status', 'created_at', 'updated_at', 'deleted_at'];

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
