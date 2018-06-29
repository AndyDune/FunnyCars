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


class Item
{
    /**
     * @var Collection
     */
    protected $collection;

    protected $kilometers = 0;

    protected $accidentsHistory = [];

    protected $accidentsActive = [];

    protected $action;

    protected $status;

    public function executeAction()
    {

    }

    public function setAction()
    {

    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }



    /**
     * @return int
     */
    public function getKilometers(): int
    {
        return $this->kilometers;
    }

    /**
     * @param int $kilometers
     */
    public function addKilometers(int $kilometers)
    {
        $this->kilometers += $kilometers;
    }

    /**
     * @return array
     */
    public function getAccidentsHistory(): array
    {
        return $this->accidentsHistory;
    }

    /**
     * @param array $accidentsHistory
     */
    public function setAccidentsHistory(array $accidentsHistory)
    {
        $this->accidentsHistory = $accidentsHistory;
    }

    /**
     * @return array
     */
    public function getAccidentsActive(): array
    {
        return $this->accidentsActive;
    }

    /**
     * @param array $accidentsActive
     */
    public function setAccidentsActive(array $accidentsActive)
    {
        $this->accidentsActive = $accidentsActive;
    }


    /**
     * @return Collection
     */
    public function getCollection(): Collection
    {
        return $this->collection;
    }

    /**
     * @param Collection $collection
     */
    public function setCollection(Collection $collection)
    {
        $this->collection = $collection;
    }

}