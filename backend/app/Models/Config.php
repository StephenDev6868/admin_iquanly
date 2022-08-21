<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dotlogics\Grapesjs\App\Traits\EditableTrait;
use Dotlogics\Grapesjs\App\Contracts\Editable;

//class Config extends Model implements Editable
//{
//    use HasFactory, softDeletes, EditableTrait;
//
//    protected $table = 'configs';
//
//    protected $fillable = ['name', 'style', 'js_handle', 'html'];
//
//    public function editor()
//    {
//        $this->getHtmlAttribute();
//    }
//
//}

class Config extends Model
{
    use HasFactory, softDeletes;

    protected $table = 'configs';

    protected $fillable = ['name', 'style', 'js_handle', 'html'];

}
