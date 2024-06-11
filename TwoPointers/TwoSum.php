<?php
class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        $left = 0;
        $right = count($numbers)-1;

        while(($numbers[$left] + $numbers[$right] != $target)){
            if($numbers[$left] + $numbers[$right] > $target) $right--;
            else $left++;
        }
        return [$left+1,$right+1];
    }

}