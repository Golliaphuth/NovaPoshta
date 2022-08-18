<?php

namespace Golliaphuth\NovaPoshta;

use Golliaphuth\NovaPoshta\Entities\Area\Area;
use Golliaphuth\NovaPoshta\Entities\Area\Settlement;

class NovaPoshta
{
    public function area(): Area
    {
        return new Area();
    }

    public function settlement(): Settlement
    {
        return new Settlement();
    }
}
