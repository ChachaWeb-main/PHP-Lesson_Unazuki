<!-- 3．連想配列を理解しよう -->

<?php
/* --------------------------------------------
 * 　連想配列
 keyに任意の名前を付けたもの
 keyが0から始まっていましたがkeyが番号だと配列から値を取り出すときなど、
 分かりづらいことも多いので、keyに任意の名前をつけて
 連想しやすくしたものを連想配列といいます。
* -------------------------------------------- */
// 配列
$subjects = array('数学', '英語', '歴史');

// 連想配列
$subjects_rensou = array(
    'math' => '数学',
    'english' => '英語',
    'history' => '歴史'
);

echo $subjects_rensou['math'];
echo '<br>';
echo $subjects_rensou['english'];
echo '<br>';
echo $subjects_rensou['history'];
?>
