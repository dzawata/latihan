<?php

function tekaTekiTeko(int $a)
{
    for ($i = 1; $i <= $a; $i++) {
        if ($i % 2 == 0) {
            if ($i % 3 == 0) {
                if ($i % 5 == 0) {
                    echo "TekaTekiTeko" . PHP_EOL;
                } else {
                    echo "TekaTeki" . PHP_EOL;
                }
            } elseif ($i % 5 == 0) {
                echo "TekaTeko" . PHP_EOL;
            } else {
                echo "Teka" . PHP_EOL;
            }
        } elseif ($i % 3 == 0) {
            if ($i % 5 == 0) {
                echo "TekiTeko" . PHP_EOL;
            } else {
                echo "Teki" . PHP_EOL;
            }
        } elseif ($i % 5 == 0) {
            echo "Teko" . PHP_EOL;
        } else {
            echo $i . PHP_EOL;
        }
    }
}

tekaTekiTeko(30);
