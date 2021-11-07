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
      <header class="masthead" style="background-image: url('img/post-bg.jpg')">
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
