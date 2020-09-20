<?php
    function line($a, $b) {
        if (is_numeric($a) && is_numeric($b)){
            if ($a != 0) {
                return[-$b/$a];
            }
        }
        return[];
    }
    function square($a, $b, $c){
        if(is_numeric($a) && is_numeric($b) &&  is_numeric($c)){
            if($a == 0) {
                return line($b, $c);
            }
            $d = $b * $b - 4 * $a * $c;
            if($d >= 0) {
                return[(-$b + sqrt($d))/(2 * $a), (-$b - sqrt($d))/(2 * $a)];
            }
        }
        return[];
    }
    function cube($a, $b, $c, $d){
        if(is_numeric($a) && is_numeric($b) && is_numeric($c) && is_numeric($d)) {
            if($a == 0) {
                return square($b, $c, $d);
            }
            if($a == 0 && $b == 0) {
                return line($c, $d);
            }
            $p = - ($b * $b)/(3 * $a * $a) + $c/$a;
            $q = (2 * pow($b, 3))/(27 * pow($a, 3)) - ($b * $c)/(3 * $a * $a) + $d/$a;
            $p1 = $p/3;
            $q1 = $q/2;
            $Q = pow($p1, 3) + pow($q1, 2);
            $f1 = - $q/2 + sqrt($Q);
            $f2 = - $q/2 - sqrt($Q);
            $alpha = pow($f1, 1/3);
            $beta = pow($f2, 1/3);
            if($Q > 0){
                return[$alpha + $beta - $b/(3 * $a)];
            }
            elseif($Q == 0) {
                return [2 * $alpha, -$alpha, -$alpha];
            }
            elseif($Q < 0) {
                return[];
            }
        }
        return[];
    }

?>