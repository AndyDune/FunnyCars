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


namespace AndyDune\FunnyCars\Car\ItemStrategy;


use AndyDune\FunnyCars\Car\Item;

abstract class StrategyAbstract
{
    /**
     * @var Item
     */
    protected $item;

    abstract public function execute(...$data);

    /**
     * @return Item
     */
    public function getItem(): Item
    {
        return $this->item;
    }

    /**
     * @param Item $item
     */
    public function setItem(Item $item)
    {
        $this->item = $item;
    }


}