<?php
/*
・アイキャッチ画像設定(functions.php側)
・Command + 矢印 で行の最初と最後に移動
*/
add_action('init', function () {
  //サムネイルを有効化
  add_theme_support('post-thumbnails');
  //メニューについての記述
  register_nav_menus([
    'global_nav' => 'グローバルナビゲーション',
  ]);
});

/* 関数: add eyecatch アイキャッチ画像がなければ*/
function get_default_eyecatch()
{
  if (has_post_thumbnail()) :
    $id = get_post_thumbnail_id();
    //添付された画像のurl,width,height属性を『配列』として返す。パラメータは$attachment_id,$size,$iconで $size の初期値は『thumbnail』
    $img = wp_get_attachment_image_src($id, 'large');
  else :
    //上記に習って『配列』で返す必要があるため array();で囲む必要がある
    $img = array(get_template_directory_uri() . '/img/post-bg.jpg');
  endif;

  return $img;
}
