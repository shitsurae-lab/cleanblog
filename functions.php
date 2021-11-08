<?php
/*
・アイキャッチ画像設定(functions.php側)
・Command + 矢印 で行の最初と最後に移動
*/
add_action('init', function () {
  add_theme_support('post-thumbnails');
});
