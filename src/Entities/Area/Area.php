<?php

namespace Golliaphuth\NovaPoshta\Entities\Area;

use Golliaphuth\NovaPoshta\Entities\Request;
use Golliaphuth\NovaPoshta\Models\NPArea;

class Area extends Request
{
    public function get(): \Illuminate\Database\Eloquent\Collection
    {
        return NPArea::all();
    }

    public function find($query): \Illuminate\Database\Eloquent\Collection
    {
        return NPArea::whereHas('translates', function ($q) use ($query) {
            $q->where('name', 'like', '%'.$query.'%');
        })->get();
    }

    public function findByRef($ref): \Illuminate\Database\Eloquent\Model
    {
        return NPArea::where('ref', $ref)->first();
    }
}
