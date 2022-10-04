<?php

include_once 'Sort.php';

class Context
{
    private Sort $sort;

    public function __construct(Sort $sort)
    {
        $this->sort = $sort;
    }

    public function list()
    {
        return $this->sort->list();
    }

    public function sort()
    {
        return $this->sort->sort();
    }
}
