<?php

namespace classes\helpers;

class Paginate
{
    //Props
    /** @var int */
    private $currentPage;

    /** @var int */
    private $lastPage;

    /** @var int */
    private $startValue;

    /** @var int */
    private $endValue;

    /** @var int */
    private $paginationStart;

    /** @var int */
    private $paginationEnd;

    public function __construct(int $pageNum, int $count)
    {
        $this->currentPage = $pageNum == '0' ? 1 : $pageNum;

        $this->endValue = $this->getCurrentPage() * 10;
        $this->startValue = $this->getEndValue() - 10;

        $value= ceil($count / 10);
        $this->lastPage = intval($value);
        $this->paginationStart = $this->getCurrentPage() - 2;
        $this->paginationEnd = $this->getCurrentPage() + 2;
        $this->paginationStart = $this->getPaginationStart() < 1
            ? 1
            : $this->getPaginationStart(); //Doesn't allow pages lower than 1
            
        $this->paginationEnd = $this->getPaginationEnd() > $this->getLastPage()
            ? $this->getLastPage()
            : $this->getPaginationEnd();
    }

    /**
     * @return int
     */
    public function getCurrentPage(): int
    {
        return $this->currentPage;
    }

    /**
     * @return int
     */
    public function getLastPage(): int
    {
        return $this->lastPage;
    }

    /**
     * @return int
     */
    public function getStartValue(): int
    {
        return $this->startValue;
    }

    /**
     * @return int
     */
    public function getEndValue(): int
    {
        return $this->endValue;
    }

    /**
     * @return int
     */
    public function getPaginationStart(): int
    {
        return $this->paginationStart;
    }

    /**
     * @return int
     */
    public function getPaginationEnd(): int
    {
        return $this->paginationEnd;
    }

}
