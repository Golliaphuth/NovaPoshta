<?php

namespace Golliaphuth\NovaPoshta\Models;

use Golliaphuth\NovaPoshta\Scopes\NPAreaDisabledScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class NPArea extends Model
{
    use SoftDeletes;

    protected $table = 'np_areas';

    public $timestamps = false;

    protected $fillable = [
        'ref',
        'disabled'
    ];

    protected $with = [
        'translate'
    ];

    public function scopeWithoutDisabled($query)
    {
        $query->where('disabled', 0);
    }

    public function translates(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(NPAreaTranslate::class, 'np_area_ref', 'ref');
    }

    public function translate($lang = null): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(NPAreaTranslate::class, 'np_area_ref', 'ref')->where('lang', ($lang) ? $lang : App::getLocale());
    }

}
