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
        'alert_amount',
        'date_added',
    ];

    public function parentMaterial($material_id)
    {
        return Material::withTrashed()->where('id', $material_id)->first();
    }

    public function supplier($supplier_id)
    {
        return Supplier::withTrashed()->where('id', $supplier_id)->first();
    }
}
