<?php
$var = '100円'; //$のあとはアルファベットかアンダーバー
echo "価格は{$var}です。";
echo '価格は' . $var . 'です。<br><br>';

$price_a = 120;
$price_b = 90;
$price_a = 150;
$price_diff = $price_a - $price_b;
echo '八百屋Aでは大根が' . $price_a . '円でした<br>';
echo '八百屋Bでは大根が' . $price_b . '円でした<br>';
echo $price_a . '円から' . $price_b . '円を引いて差額は' . $price_diff . '円です';
?>
