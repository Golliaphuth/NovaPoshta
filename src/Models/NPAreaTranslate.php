<?php

namespace Golliaphuth\NovaPoshta\Models;

use Illuminate\Database\Eloquent\Model;

class NPAreaTranslate extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'lang',
        'name'
    ];
}
