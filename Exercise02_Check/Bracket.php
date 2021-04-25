<?php
$checkBracket = "s * (s – a) * (s – b) * (s – c)";
$a = ") 1 + 1";
function checkSym($string)
{
    $bracket = new SplStack();
    $checkBracketArray = str_split($string);
    $left = "(";
    $right = ")";
    foreach ($checkBracketArray as $value) {
        if ($value === $left ) {
            $bracket->push($value);
        } else if ($value === $right) {
            if ($bracket->isEmpty()) {
                return false;
            } else {
                $bracket->pop();
            }
        }
    }
    if ($bracket->isEmpty()) {
        return true;
    } else return false;
}
var_dump(checkSym($a));