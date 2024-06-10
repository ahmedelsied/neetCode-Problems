<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $validSolutions = [];
        foreach($nums as $i => $num){
            if(isset($validSolutions[$num])) return [$validSolutions[$num][0], $i];
            $validSolutions[$target - $num] = [$i];
        }
    }
}