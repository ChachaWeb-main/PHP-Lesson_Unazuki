<!-- 3．クラスに引数を渡してインスタンスをより自由に生成してみよう -->

<?php
/* --------------------------------------------
 * 　クラスに引数を渡す
 * -------------------------------------------- */

class Member
{
    // プロパティの宣言（クラス内で定義する変数をプロパティという）
    public $name;
    public $age;
    public $roll;

    // コンストラクタ（インスタンスを生成した際に実行される）
    public function __construct($name, $age, $roll)
    {
        $this->name = $name;
        $this->age = $age;
        $this->roll = $roll;
    }

    // メソッドの宣言（クラス内で定義する関数をメソッドという）
    public function callStaff()
    {
        echo 'スタッフ情報:' . $this->name . $this->age .
            '歳' . $this->roll;
    }
}

$member = new Member('山崎', 42, '部長');
$member->callStaff();
?>



<?php
/* --------------------------------------------
* 　下記はWordPressでよく使うコードの例です
* -------------------------------------------- */
$args = array(
    'post_type' => 'Post',
    'posts_per_page' => 10,
    'paged' => $paged
);
$the_query = new WP_Query($args); //WP_Queryでエラーが出ているのはWP外で実行しているため
?>
<?php if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <!-- 処理の内容 -->
    <?php endwhile; ?>
    <?php wp_reset_postdata(); //この関数でエラーが出ているのはWP外で実行しているため 
    ?>
<?php else : ?>
<?php endif; ?>