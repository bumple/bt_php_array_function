<?php

class TotalArray
{
    public function total($arr)
    {
        $total = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $total += $arr[$i][$i];
        }
        return $total;
    }
}