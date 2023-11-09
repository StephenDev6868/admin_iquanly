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

    public function parentMaterial($id, $material_id)
    {
        $query = WMaterial::query()->join('materials', 'materials.id', '=', 'w_materials.material_id')
                        ->where([
                            'w_materials.id' => $id,
                            'materials.id' => $material_id,
                        ])
                        ->whereNull('materials.deleted_at')
                        ->where('materials.deleted_at')
                        ->select(['materials.code as code', 'materials.name as name', 'materials.unit as unit'])
                        ->get()->toArray();
        return $query ? $query[0] : [];
    }

    public function supplier()
    {
        return $this->hasOne(Supplier::class, 'id', 'supplier_id')
            ->orWhereNull('deleted_at')
            ->orWhereNotNull('deleted_at');
    }
}
