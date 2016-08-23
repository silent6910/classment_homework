<?php
    function test()
    {
        $M = array();
        for ($i = 0; $i < 12; $i++) {
            for ($j = 0; $j < 12; $j++) {
                $M[$i][$j] = "";
            }
        }
        for ($i = 1; $i < 11; $i++) {
            for ($j = 1; $j < 11; $j++) {
                $M[$i][$j] = 0;
            }
        }
        $i = 0;
        $ba = 0;
        while ($i < 40) {
            $A = rand(1, 10);
            $B = rand(1, 10);
            if (strcmp($M[$A][$B], 'M')) {
                $M[$A][$B] = 'M';
                $i++;
                $ba++;
            }

        }
        for ($i = 0; $i < 10; $i++) {
            echo "<br>";
            for ($j = 0; $j < 10; $j++) {
                echo $M[$i][$j];
            }
        }
        $abc = 0;
        echo "<br>";
        foreach ($M as $V1) {
            echo "<br>";
            foreach ($V1 as $V2) {
                echo $V2;
                $abc++;
            }
        }
        echo "<br>";
        echo count($M, COUNT_RECURSIVE);
        echo "<br>";
        echo $abc;
        echo "<br>";
        echo $ba;
        echo "<br>";

        for ($i = 1; $i < 11; $i++) {
            for ($j = 1; $j < 11; $j++) {
                if (!preg_match("/\M/i", $M[$i][$j]) && preg_match("/\M/i", $M[$i - 1][$j - 1])) {
                    $M[$i][$j]++;
                }
                if (!preg_match("/\M/i", $M[$i][$j]) && preg_match("/\M/i", $M[$i - 1][$j])) {
                    $M[$i][$j]++;
                }
                if (!preg_match("/\M/i", $M[$i][$j]) && preg_match("/\M/i", $M[$i - 1][$j + 1])) {
                    $M[$i][$j]++;
                }
                if (!preg_match("/\M/i", $M[$i][$j]) && preg_match("/\M/i", $M[$i][$j - 1])) {
                    $M[$i][$j]++;
                }
                if (!preg_match("/\M/i", $M[$i][$j]) && preg_match("/\M/i", $M[$i][$j + 1])) {
                    $M[$i][$j]++;
                }
                if (!preg_match("/\M/i", $M[$i][$j]) && preg_match("/\M/i", $M[$i + 1][$j - 1])) {
                    $M[$i][$j]++;
                }
                if (!preg_match("/\M/i", $M[$i][$j]) && preg_match("/\M/i", $M[$i + 1][$j])) {
                    $M[$i][$j]++;
                }
                if (!preg_match("/\M/i", $M[$i][$j]) && preg_match("/\M/i", $M[$i + 1][$j + 1])) {
                    $M[$i][$j]++;
                }
            }
        }
        for ($i = 1; $i < 11; $i++) {
            echo "<br>";
            for ($j = 1; $j < 11; $j++) {
                echo $M[$i][$j] . "     ";
            }
        }
    }
    test();
