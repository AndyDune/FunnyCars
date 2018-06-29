<?php
/**
 * ----------------------------------------------
 * | Author: Andrey Ryzhov (Dune) <info@rznw.ru> |
 * | Site: www.rznw.ru                           |
 * | Phone: +7 (4912) 51-10-23                   |
 * | Date: 29.06.2018                            |
 * -----------------------------------------------
 *
 */


namespace AndyDune\FunnyCars\Accident;

use AndyDune\FunnyCars\ParkAvailTrait;

class Collection
{
    use ParkAvailTrait;

    public function getBlankCarFailure()
    {
        $instance = new CarFailure();
        $instance->setCollection($this);
    }
}