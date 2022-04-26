<!-- 3．関数の戻り値を理解しよう -->

<?php
/* --------------------------------------------
 * 　関数の戻り値
 * -------------------------------------------- */
// ----- 関数の戻り値
function getTotalPrice($price, $quantity){
    return $price * $quantity;
}
getTotalPrice(2000, 5); //値として戻しているだけで表示する命令はない

function TaxIncludedPrice($price, $quantity){
    echo getTotalPrice($price, $quantity) * 1.1;
}
TaxIncludedPrice(2000, 5);

?>
