<!-- テーマ１０　[PHPの基礎] コロン構文の書き方 -->

<!-- 1．よく使われるコロン構文についても知っておこう -->

<?php
/* --------------------------------------------
 * 　if for foreach while のコロン構文
 * -------------------------------------------- */

$a = 5;
$b = 3;

/*
if ($a > $b) {
    echo $a . 'は' . $b . 'より大きいです';
}elseif($a < $b){
    echo $a . 'は' . $b . 'より小さいです';
}else{
    echo $a . 'と' . $b . 'は等しい';
}
*/
if ($a > $b) :
    echo $a . 'は' . $b . 'より大きいです';
elseif ($a < $b) :
    echo $a . 'は' . $b . 'より小さいです';
else :
    echo $a . 'と' . $b . 'は等しい';
endif;

echo '<br><br>';
for ($i = 1; $i < 5; $i++) :
    echo $i . '、';
endfor;

echo '<br><br>';
$subjects = array('数学', '英語', '社会');
foreach ($subjects as $value) :
    echo $value . '、';
endforeach;

echo '<br><br>';
$i = 1;
while ($i < 5) :
    echo $i . '、';
    $i++;
endwhile;

?>
