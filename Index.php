<?php

class Index
{
    public function test()
    {
        for ($i = 0; $i < 100; $i++) {
            for ($j = 0; $j < 3; ++$j) {

                if ($i === 3) {
                    break 2; // exit from 2 loops.
                }
                echo nl2br('loop ' . $i . PHP_EOL);
            }
        }
    }
}

$object = new Index();
$object->test();