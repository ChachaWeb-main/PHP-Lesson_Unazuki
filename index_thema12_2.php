<!-- テーマ１２　 [PHPの基礎] オブジェクト-->

<!-- 2．オブジェクト・クラス・インスタンスの概念を理解しよう -->

<?php
/* --------------------------------------------
 * 　PHPの基礎：オブジェクト
 * -------------------------------------------- */

class MessageClass
{
    // プロパティの宣言（クラス内で定義する変数をプロパティという）
    public $message = 'Hello';

    // メソッドの宣言（クラス内で定義する関数をメソッドという）
    public function sayHello()
    {
        echo $this->message;
    }
}
$say = new MessageClass(); //インスタンス（オブジェクト）を生成 → new + クラス名(); これを$sayに代入している。
echo $say->message; //宣言したプロパティにアクセスしている。
echo '<br>';
$say->sayHello();

echo '<br>';

// インスタンスからプロパティの値にアクセスする方法。
class Staff
{
    // プロパティの宣言（クラス内で定義する変数をプロパティという）
    public $name;
    public $age;
    public $roll;

    // メソッドの宣言（クラス内で定義する関数をメソッドという）
    public function callStaff()
    {
        echo 'スタッフ情報:' . $this->name . $this->age .
            '歳' . $this->roll;
    }
}
$staff_1 = new Staff(); //インスタンス（オブジェクト）を生成
$staff_1->name = '佐藤';
$staff_1->age = 32;
$staff_1->roll = '課長';
$staff_1->callStaff();

echo '<br>';

$staff_2 = new Staff(); //インスタンス（オブジェクト）を生成
$staff_2->name = '木村';
$staff_2->age = 26;
$staff_2->roll = '主任';
$staff_2->callStaff();
?>