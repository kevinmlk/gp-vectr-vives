<?php get_header(); ?>
<?php get_template_part('inc/block', 'header'); ?>
<section>
  <?php if (has_post_thumbnail()): ?>
    <img src="<?php the_post_thumbnail_url('project-thumb'); ?>" alt="<?php the_title(); ?>">
  <?php endif; ?>
</section>
<?php get_footer(); ?>