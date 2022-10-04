<?php

include_once 'Sort.php';

class BubbleSort implements Sort
{

    private array $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function list()
    {
        return $this->data;
    }

    public function sort()
    {
        for ($i = 0; $i < count($this->data); $i++) {
            for ($j = 0; $j < count($this->data) - 1; $j++) {
                if ($this->data[$j] > $this->data[$j + 1]) {
                    $temp = $this->data[$j];
                    $this->data[$j] = $this->data[$j + 1];
                    $this->data[$j + 1] = $temp;
                }
            }
        }
    }
}
