<?php

namespace Golliaphuth\NovaPoshta\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NPArea extends Model
{
    use SoftDeletes;

    protected $table = 'np_areas';

    public $timestamps = false;

    protected $fillable = [
        'ref',
        'disabled'
    ];

    public function translates(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(NPAreaTranslate::class, 'np_area_id', 'id');
    }
}
