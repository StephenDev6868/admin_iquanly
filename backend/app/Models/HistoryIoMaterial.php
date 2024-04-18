<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryIoMaterial extends Model
{
    use HasFactory;

    protected $table = 'history_io_materials';

    protected $fillable = [
        'process_cut_order_id',
        'creator_id',
        'wmaterial_id',
        'object_id',
        'description',
        'date_io',
        'type',
        'amount',
    ];

    protected function configCutDiagram()
    {
        return $this->hasOne(ConfigCutDiagram::class, 'id', 'config_cut_diagram_id');
    }
}
