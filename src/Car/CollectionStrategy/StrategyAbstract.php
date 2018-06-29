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


namespace AndyDune\FunnyCars\Car\CollectionStrategy;


abstract class StrategyAbstract
{
    protected $collection;


    abstract public function execute(...$data);

    /**
     * @return mixed
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param mixed $collection
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
    }


}