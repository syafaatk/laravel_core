<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterSupplier extends Model  
{

    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'master_supplier';

    protected $primaryKey = 'master_supplier_id';
    
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['master_supplier_id', 'master_supplier_name', 'master_supplier_brand', 'master_supplier_address', 'master_city_id', 'master_supplier_phone_office', 'master_supplier_phone_mobile', 'master_supplier_pic', 'master_supplier_section', 'master_supplier_email', 'master_supplier_date_of_reg', 'master_supplier_category_id', 'master_supplier_status','master_brand_id', 'created_at', 'updated_at', 'deleted_at'];

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
    protected $dates = ['master_supplier_date_of_reg', 'created_at', 'updated_at', 'deleted_at'];

}
