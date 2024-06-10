<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $result = [];
        foreach($strs as $i => $str){
            $strArr = str_split($str);
            sort($strArr);
            $result[implode("",$strArr)][] = $str;
        }
        return array_values($result);
    }

}