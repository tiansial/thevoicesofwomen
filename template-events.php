<?php
/**
 * Template Name: Events Archive
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'archive-events'); ?>
<?php endwhile; ?>
