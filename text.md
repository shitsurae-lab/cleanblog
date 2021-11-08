have posts()について
if 構文と while 構文に出てくる

結果があるかどうかをチェックする(the_post したあとは残りをチェックすることになる)

the_post(); ループを次の投稿にすすめる

have_posts は the_post と使うと効果的

[変数・配列、連想配列を学ぶ](https://www.udemy.com/course/wordpress_master/learn/lecture/22606038#questions)

```php
<p style="padding-top: 10px">
    <?php
    $num = 3; //変数宣言
    echo $num;
    echo '<br>';
    echo $num + 1;
    echo '<br>';

    //配列
    $toshi = ['山田', '斎藤', '田中'];
    // $toshi[0] = "山田";
    // $toshi[1] = "斎藤";
    // $toshi[2] = "田中";
    echo '配列の結果は' . $toshi[0] . 'さんです'; //山田

    //配列 新旧
    echo '<br>';
    //配列 旧 array
    $key = array('稲荷崎');
    //配列 新 []
    $key = ['烏野'];
    echo $key[0];
    echo '<br>';

    //連想配列
    $items = [
      'apple' => 'りんご',
      'peace' => 'もも',
      'grape' => 'ぶどう'
    ];
    echo '連想配列の三番目は' . $items['grape'] . 'です';
    ?>
  </p>

```
