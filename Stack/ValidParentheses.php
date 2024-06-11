<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $closingStackBracket = "";
        $bracketOpensMap = [
            "(" => ")",
            "{" => "}",
            "[" => "]"
        ];
        for($i=0;$i<strlen($s);$i++){
            if(isset($bracketOpensMap[$s[$i]])){
                $closingStackBracket .= $bracketOpensMap[$s[$i]];
                continue;
            }
            if($s[$i] != $closingStackBracket[(strlen($closingStackBracket)-1)]){
                return false;
                continue;
            }
            $closingStackBracket = substr_replace($closingStackBracket, '', -1);
        }
        return empty($closingStackBracket);

    }
}