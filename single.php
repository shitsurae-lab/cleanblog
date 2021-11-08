<!DOCTYPE html>
<html lang="en">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('includes/header'); ?>

  <!-- 念の為 バグ回避 if -->
  <?php if (have_posts()) : ?>
    <!-- Page Header -->
    <!-- ループの開始(投稿を出力する時に必ず必要) -->
    <?php while (have_posts()) : the_post(); ?>
      <!-- Page Header -->
      <!-- アイキャッチ画像の値を取得して変数idに代入する -->
      <?php
      if (has_post_thumbnail()) :
        $id = get_post_thumbnail_id();
        //添付された画像のurl,width,height属性を『配列』として返す。パラメータは$attachment_id,$size,$iconで $size の初期値は『thumbnail』
        $img = wp_get_attachment_image_src($id, 'large');
      else :
        //上記に習って『配列』で返す必要があるため array();で囲む必要がある
        $img = array(get_template_directory_uri() . '/img/post-bg.jpg');
      endif;
      ?>

      <?php var_dump($img) ?>
      <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="post-heading">
                <h1><?php the_title(); ?></h1>
                <span class="meta">Posted by
                  <?php the_author(); ?>
                  on <?php the_time(get_option('date-format')); ?></span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Post Content -->
      <article>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <!-- アイキャッチ画像設定 投稿ページ側 その①-->
              <!-- imgタグすべてを出力する -->
              <?php the_post_thumbnail(array(400, 300), array('alt' => 'アイキャッチ画像')); ?>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </article>
      <hr>
    <?php endwhile; ?>
    <!-- 念の為 バグ回避 endif -->
  <?php endif; ?>
  <!-- Footer -->
  <?php get_template_part('includes/footer'); ?>
  <?php get_footer(); ?>
</body>

</html>
