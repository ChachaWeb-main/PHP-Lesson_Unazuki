<!-- 2．foreach文の２種類の構文を理解しよう -->

<?php
/* --------------------------------------------
 * 　foreach文の２種類の構文
 * -------------------------------------------- */

foreach ($subjects as $value) {
	echo $value . '<br>';
}

echo '<br>';
// 連想配列を作る
$subjects = array(
	'math' => '数学',
	'english' => '英語',
	'history' => '歴史'
);
foreach ($subjects as $key => $value) {
	echo $key . 'は' . $value . '<br>';
}
?>
