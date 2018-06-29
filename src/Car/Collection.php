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


namespace AndyDune\FunnyCars\Car;
use AndyDune\FunnyCars\ParkAvailTrait;

class Collection
{
    use ParkAvailTrait;

    protected $cars;

    public function addCar($car)
    {
        $this->cars[] = $car;
        return $this;
    }


    /**
     * @return Item
     */
    public function getBlankCarInstance() : Item
    {
        $instance = new Item();
        $instance->setCollection($this);
        return $instance;
    }
}