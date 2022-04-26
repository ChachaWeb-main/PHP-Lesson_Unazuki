<!-- 2．関数を自作してみよう -->

<?php
/* --------------------------------------------
 * 　関数を自作する
 * -------------------------------------------- */
// ----- 関数を使う必要性の確認
$price1 = 1000; //商品価格
$quantity1 = 1; //個数
$total_price1 = $price1 * $quantity1; //合計金額
echo '合計金額は' . $total_price1 . '円です';

echo '<br>';

$price2 = 2000; //商品価格
$quantity2 = 2; //個数
$total_price2 = $price2 * $quantity2; //合計金額
echo '合計金額は' . $total_price2 . '円です';
echo '<br><br>';

// ----- 関数を自作する
function calculation(){
    echo 2000 * 2;
}
calculation();
echo '<br><br>';

function sayHello(){
    echo 'Hello';
}
sayHello();
echo '<br>';

// ----- 引数の概念を入れる
function totalPrice($price, $quantity){
    echo '合計金額は' . number_format($price * $quantity) . '円です。';
}
totalPrice(1000, 1);
echo '<br>';
totalPrice(2000, 2);
?>
