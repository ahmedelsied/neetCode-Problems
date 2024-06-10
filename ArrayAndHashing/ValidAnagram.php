<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        if(strlen($s) != strlen($t)) return false;
        $sArr = [];
        $tArr = [];
        for($i=0; $i<strlen($s); $i++) {
            if(isset($sArr[$s[$i]])){
                $sArr[$s[$i]]++;
            }else{
                $sArr[$s[$i]] = 1;
            }
            if(isset($tArr[$t[$i]])){
                $tArr[$t[$i]]++;
            }else{
                $tArr[$t[$i]] = 1;
            }
        }

        foreach($sArr as $char => $seenCount){
            if($tArr[$char] != $seenCount) return false;
        }
        return true;
    }
}