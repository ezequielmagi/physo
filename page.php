<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>

<main class="site-main physo-page-content" id="main">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>