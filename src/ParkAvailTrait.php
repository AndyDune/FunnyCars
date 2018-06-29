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


namespace AndyDune\FunnyCars;


trait ParkAvailTrait
{
    /**
     * @var Park
     */
    protected $park;

    /**
     * @return Park
     */
    public function getPark() : Park
    {
        return $this->park;
    }

    /**
     * @param Park $park
     */
    public function setPark(Park $park)
    {
        $this->park = $park;
    }


}