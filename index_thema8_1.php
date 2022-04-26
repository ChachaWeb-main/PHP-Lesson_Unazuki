<!-- テーマ８　[PHPの基礎] 繰り返し構文 ー foreach -->

<!-- 1．繰り返し構文foreachの基本 -->

<?php
/* --------------------------------------------
 * 　foreach文とは
 * -------------------------------------------- */
// 配列の復習
$subjects = array('数学', '英語', '歴史');
// print_r：指定した変数の情報を表示する
print_r($subjects);

echo '<br>';
foreach ($subjects as $value) {
	echo $value . '<br>';
}
?>
