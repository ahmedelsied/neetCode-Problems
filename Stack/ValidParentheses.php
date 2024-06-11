<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $closingStackBracket = [];
        $bracketOpensMap = [
            "(" => ")",
            "{" => "}",
            "[" => "]"
        ];
        for($i=0;$i<strlen($s);$i++){
            if(isset($bracketOpensMap[$s[$i]])){
                $closingStackBracket[] = $bracketOpensMap[$s[$i]];
                continue;
            }
            if($s[$i] != $closingStackBracket[(count($closingStackBracket)-1)]){
                return false;
            }
            array_pop($closingStackBracket);
        }
        return empty($closingStackBracket);

    }
}