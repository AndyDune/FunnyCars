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


use AndyDune\FunnyCars\Car\Collection;

class Park
{

    protected $dataProvider = null;

    public function setDataProvider($data)
    {
        $this->dataProvider = $data;
    }

    public function getCarsCollection()
    {
        $instance = new Collection();
        $instance->setPark($this);
        return $instance;
    }

    public function getModelCollection()
    {

    }

    public function getDriverCollection()
    {

    }

    public function getAccidentCollection()
    {

    }
}