<?php

class Remove
{
    public function removeElement($arr, $number)
    {
        if (empty(array_search($number, $arr))) {
            echo "ko co " . $number . " trong mang";
        } else {
            for ($i = 0; $i < count($arr); $i++) {
                $index = array_search($number, $arr);
                if ($index != null) {
                    array_splice($arr, $index, 1);
                    array_push($arr, 0);
                    $index = null;
                }
            }
        }
        return $arr;
    }
}