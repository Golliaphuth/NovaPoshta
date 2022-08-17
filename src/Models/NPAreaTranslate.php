<?php

namespace Golliaphuth\NovaPoshta\Models;

use Illuminate\Database\Eloquent\Model;

class NPAreaTranslate extends Model
{
    protected $table = 'np_area_translates';

    public $timestamps = false;

    protected $fillable = [
        'lang',
        'name'
    ];
}
