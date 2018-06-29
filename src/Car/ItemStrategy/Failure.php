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


class Failure extends StrategyAbstract
{
    public function execute(...$data)
    {
        $accident = $data[0];
        $this->getItem()->setAccidentsActive($accident);
    }
}