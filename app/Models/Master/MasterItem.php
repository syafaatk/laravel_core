<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterItem extends Model  
{

    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'master_item';

    protected $primaryKey = 'master_item_id';
    
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['master_item_id', 'master_item_name', 'master_unit_id', 'master_item_price', 'master_item_bottom_price', 'master_item_price_retail', 'master_item_price_coorporate', 'master_brand_id', 'master_warehouse_id', 'master_item_price_last_update', 'master_supplier_id', 'master_item_file', 'master_item_stock', 'master_item_stock_minimum', 'master_item_status', 'created_at', 'updated_at', 'deleted_at'];

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
    protected $dates = ['master_item_price_last_update', 'created_at', 'updated_at', 'deleted_at'];

}
