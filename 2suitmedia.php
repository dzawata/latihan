<?php

class Kamus
{
    private array $list = [];

    public function tambah(string $key, array $data)
    {
        foreach ($data as $value) {
            $this->list[$key][] = $value;
        }
    }

    public function search(string $value, array $data)
    {
        return (array_search($value, $data));
    }

    public function tampilData()
    {
        return $this->list;
    }

    public function searchString(string $value)
    {
        return $this->search($value, $this->list); // true or false
    }

    public function ambilSinonim(string $key)
    {
        $values = [];
        if (!empty($this->list[$key])) {
            foreach ($this->list[$key] as $k => $v) {
                $values[] = $v;
            }

            foreach ($values as $k1 => $v1) {
                if (!empty($this->list[$v1])) {
                    foreach ($this->list[$v1] as $k2 => $v2) {
                        $values[] = $v2;
                    }
                }
            }
        }

        return $values;
    }
}

$kamus = new Kamus();
$kamus->tambah('big', ['large', 'great']);
$kamus->tambah('big', ['huge', 'fat']);
$kamus->tambah('huge', ['enormous', 'gigantic']);
$kamus->tambah('gigantic', ['abc', 'def']);
$kamus->tambah('def', ['ghi', 'jkl']);

$ambilSinonims = $kamus->ambilSinonim('as');
var_dump($ambilSinonims);
