<!-- 2．配列の修正・追加方法・初期化をやってみよう -->

<?php
/* --------------------------------------------
 * 　配列の修正・追加方法・初期化
* -------------------------------------------- */
//　配列を修正
// 一度定義した変数などで再度定義せずにOKですが、解説のため記述しています。
$subjects = array('数学', '英語', '歴史');
$subjects[1] = 'フランス語';
echo $subjects[0];
echo '<br>';
echo $subjects[1];
echo '<br>';
echo $subjects[2];
echo '<br>';
echo '<br>';

//　配列を追加
$subjects[] = '国語';
echo $subjects[0];
echo '<br>';
echo $subjects[1];
echo '<br>';
echo $subjects[2];
echo '<br>';
echo $subjects[3];
echo '<br>';
echo '<br>';

//　配列の初期化
$subjects = array();
echo $subjects[0];
?>
