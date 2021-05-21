<?php

class CountElement
{
    public function countelements($arr, $str)
    {
        $count = 0;
        for ($i = 0; $i < strlen($arr); $i++) {
            if ($arr[$i] == $str) {
                $count++;
            }
        }
        return 'so lan trung: ' . $count;
    }
}
