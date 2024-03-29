<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Navigation -->
  <?php get_template_part('includes/header'); ?>

  <!-- 念の為 -->
  <?php if (have_posts()) : ?>
    <!-- 固定ページの内容があるのであればという意味で while(have_posts): -->
    <?php while (have_posts()) : the_post(); ?>
      <!-- START Get thumbnail -->
      <?php $mainVisual = get_default_eyecatch(); ?>
      <!-- END Get thumbnail -->
      <!-- Page Header -->
      <header class="masthead" style="background-image: url('<?php echo $mainVisual[0]; ?>')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="page-heading">
                <h1><?php the_title(); ?></h1>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Main Content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php the_content(); ?>
          </div>
        </div>
      </div>

      <hr>
    <?php endwhile; ?>
  <?php endif; ?>
  <!-- Footer -->
  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>

</body>

</html>
