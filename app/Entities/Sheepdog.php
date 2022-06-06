<?php

namespace App\Entities;

use App\Entities\Interfaces\Animal;
use App\Traits\MakesSound;

class Sheepdog implements Animal
{
    use MakesSound;

    public function hunt()
    {
        return true;
    }
}
