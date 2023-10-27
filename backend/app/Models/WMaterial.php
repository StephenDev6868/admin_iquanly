<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class WMaterial extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'material_id',
        'supplier_id',
        'quantity_input',
        'quantity_contain',
        'quantity_use',
        'date_added',
    ];

    public function parentMaterial()
    {
        return $this->hasOne(Material::class, 'id', 'material_id');
    }

    public function supplier()
    {
        return $this->hasOne(Supplier::class, 'id', 'supplier_id');
    }
}
