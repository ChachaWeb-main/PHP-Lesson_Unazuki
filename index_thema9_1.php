<!-- テーマ９　[PHPの基礎] 繰り返し構文 ー while -->

<!-- 1．繰り返し構文whileの基本とWordPressでの実際の使われ方 -->

<?php
/* --------------------------------------------
 * 　while文
 * -------------------------------------------- */

$i = 1;
while ($i < 5) {
    echo $i . '<br>';
    $i++;
}
echo '<br>';
for ($i = 1; $i < 5; $i++) {
    echo $i . '<br>';
}
?>
