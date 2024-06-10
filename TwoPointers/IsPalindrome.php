<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {

        $newS = "";

        for($i=0;$i<strlen($s);$i++){
            if(ctype_alpha($s[$i]) || is_numeric($s[$i])){
                $newS .= strtolower($s[$i]);
            }
        }
        $length = strlen($newS);
        $j = 0;
        $k = $length-1;
        for($i=0;$i<$length-1;$i++){
            if($newS[$j] == $newS[$k]){
                $j++;
                $k--;
                continue;
            }
            return false;
        }
        return true;
    }
}