<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $seen = [];
        $result = [];
        foreach($nums as $num){
            if(!isset($seen[$num])){
                $seen[$num] = 1;
                continue;
            }
            $seen[$num]++;
        }
        arsort($seen);
        $j = 0;
        foreach($seen as $num => $count){
            if($j == $k) break;
            $result[] = $num;
            $j++;
        }
        return $result;
    }
}