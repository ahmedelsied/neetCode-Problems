<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestConsecutive($nums) {
        $matrix = [];
        foreach($nums as $i => $num){
            if(isset($matrix[$num])) continue;
            $matrix[$num] = true;
        }
        $longestConsecutive = 0;
        foreach($matrix as $num => $value){
            if(isset($matrix[$num-1])) continue;
            $j = 1;
            while(isset($matrix[$num+$j])){
                $j++;
            }
            $longestConsecutive = max($j,$longestConsecutive);

        }

        return $longestConsecutive;
    }
}