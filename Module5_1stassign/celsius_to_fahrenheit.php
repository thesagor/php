<?php
function recersive($n)
{
    if ($n == 1) {
        return 1;
    } else {
        return $n * recersive($n - 1);
    }
}

echo recersive(5);
