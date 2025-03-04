<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class CateringPackages extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'catering_packages';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'min_order',
        'meal_limit',
        'good_for',
    ];
}
