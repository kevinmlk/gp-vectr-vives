<?php get_header(); ?>
<?php get_template_part('inc/block', 'header'); ?>
<section class="container">

  <div>
    <?php if (has_post_thumbnail()): ?>
      <img src="<?php the_post_thumbnail_url('rectangle-small'); ?>" alt="<?php the_title(); ?>">
    <?php endif; ?>
  </div>
  <div>
    <div>
      <?php
      $categories = get_categories(
        array(
          'taxonomy' => 'vakken',
        )
      );

      if ($categories):
        foreach ($categories as $cat):
          ?>
          <span>
            <?php echo $cat->name; ?>
          </span>
        <?php endforeach; endif; ?>
    </div>
    <h3></h3>
    <p></p>
  </div>
</section>

<section>

</section>
<?php get_footer(); ?>