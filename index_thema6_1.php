<!--テーマ６　[PHPの基礎] 条件分岐構文 if -->

<!-- 1．条件分岐構文とは？if文の基本を学ぼう -->

<?php
/* --------------------------------------------
 * 　条件分岐文とは
 * -------------------------------------------- */
// if文
$a = 5;
$b = 3;
if ($a + $b == 8) {
    echo $a . '+' . $b . 'は8です';
}
echo '<br>';
if (true) {
    echo 'これは真です';
}
if (false) {
    echo '計算結果';
}

echo '<br>';

/* --------------------------------------------
 * 　比較演算子
 * -------------------------------------------- */

// 等しい場合trueを返す
if ($a + $b == 8) {
    echo $a . '+' . $b . 'は8です';
}
echo '<br>';

// 等しくない場合trueを返す
if ($a + $b != 5) {
    echo $a . '+' . $b . 'は5ではありません';
}
echo '<br>';

// 左辺が右辺以上の場合trueを返す
if ($a + $b >= 5) {
    echo $a . '+' . $b . 'は5以上です';
}
echo '<br>';

// 左辺が右辺以下の場合trueを返す
if ($a + $b <= 10) {
    echo $a . '+' . $b . 'は10以下です';
}
echo '<br>';

// 左辺が右辺より大きい場合trueを返す
if ($a + $b > 3) {
    echo $a . '+' . $b . 'は3より大きいです';
}
echo '<br>';

// 左辺が右辺より小さい場合にtrueを返す
if ($a + $b < 10) {
    echo $a . '+' . $b . 'は10より小さいです';
}
echo '<br>';
echo '<br>';
?>
