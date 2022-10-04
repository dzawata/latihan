<?php

include_once 'Context.php';
include_once 'BubbleSort.php';
include_once 'ShellSort.php';

class App
{
    public function run(string $method, array $data)
    {
        if ($method == 'bubbleSort') {
            $run = new Context(new BubbleSort($data));
            $run->sort($data);
            return $run->list();
        }

        if ($method == 'shellSort') {
            $run = new Context(new ShellSort($data));
            $run->sort($data);
            return $run->list();
        }
    }
}

$app = new App();
// $result = $app->run('bubbleSort', [1, 2, 5, 4, 3, 0, -1]);
// print_r($result);
$result = $app->run('shellSort', [1, 2, 5, 4, 3, 0, -1]);
print_r($result);
