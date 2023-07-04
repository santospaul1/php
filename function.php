<?php
function lam($x, $y){
    if($y == 0){
        return 0;
    }
    else{
        return $x + lam($x, $y-1);
    }
}
echo "The product is: " .lam(6,7). "<br />";
?>