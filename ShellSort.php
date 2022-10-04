<?php

include_once 'Sort.php';

class ShellSort implements Sort
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
        $interval = 0;
        while ($i = 0 <= count($this->data) / 3) {
            $interval = ($interval * 3) + 1;
        }

        while ($interval > 0) {
            for ($i = $interval; $i < count($this->data); $i++) {
                $temp = $this->data[$i];
                $inner = $i;

                while ($inner > $interval - 1 && $this->data[$inner - $interval] >= $temp) {
                    $this->data[$inner] = $this->data[$inner - $interval];
                    $inner = $inner - $interval;
                }
                $this->data[$inner] = $temp;
            }
            $interval = ($interval - 1) / 3;
        }
        return $this->data;
    }
}
