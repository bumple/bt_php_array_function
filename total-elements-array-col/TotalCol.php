<?php

class TotalCol
{
    public function total($arr, $col)
    {
        $total = 0;
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++) {
                if ($j = $col) {
                    $total += $arr[$i][$j];
                }
            }
        }
        return $total;
    }

}