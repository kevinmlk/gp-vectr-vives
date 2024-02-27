<?php get_header(); ?>
<main>
  <?php get_template_part('inc/block', 'header'); ?>
  <!-- Projects section -->
  <section class="container mt-5 mb-5 pt-5 pb-5 d-flex flex-column">
    <div class="d-flex justify-content-between align-items-center">
      <h2 class="col-4">Geselecteerde werken</h2>
      <p class="col-4">Ons toegewijde studenten van aspirerende digitale vormgevers gebruiken hun creativiteit om
        baanbrekende
        ontwerpen
        te creëren.</p>
    </div>
    <hr>
    <div class="subjects-filter pt-5 pb-5  d-flex gap-3" id="subjects-filter">
      <a href="<?php echo esc_url(home_url('/projecten')); ?>" class="filter-all-link">Alles</a>
      <?php
      // Retrieve all terms of your custom taxonomy
      $terms = get_terms(
        array(
          'taxonomy' => 'vakken',
          'hide_empty' => false,
        )
      );

      if ($terms && !is_wp_error($terms)) {
        // Loop through the terms and display them
        $colors = array('color-1', 'color-2', 'color-3');
        $i = 0;

        foreach ($terms as $term) {
          $colorClass = $colors[$i % count($colors)];
          echo '<a class="subject-filter-link ' . esc_attr($colorClass) . '" href=" ' . get_term_link($term) . ' ">' . esc_html($term->name) . '</a>';
          $i++;
        }
      } ?>
    </div>
    <!-- New Projects section -->
    <section class="mb-5 pb-5">
      <div class="row row-cols-2 d-flex justify-content-between projects-container">
        <?php
        $homepageProjects = new WP_Query(
          array(
            'posts_per_page' => 8,
            'post_type' => 'projects',
          ),
        );

        while ($homepageProjects->have_posts()):
          $homepageProjects->the_post();
          ?>
          <div class="project-thumb d-flex flex-column gap-3 mb-5">
            <?php if (has_post_thumbnail()): ?>
              <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('project-thumb') ?>"
                  alt="<?php the_title(); ?>"></a>
            <?php endif; ?>
            <div class="subjects-container d-flex gap-3">
              <?php
              // Assuming the custom post type is called 'book' and the taxonomy is called 'genre'
            
              // Get the current post's ID
              $post_id = get_the_ID();

              // Get the terms for the 'genre' taxonomy associated with the current post
              $terms = get_the_terms($post_id, 'vakken');

              if ($terms && !is_wp_error($terms)) {
                // Loop through the terms and display them
                $colors = array('color-1', 'color-2', 'color-3');
                $i = 0;

                foreach ($terms as $term) {
                  $colorClass = $colors[$i % count($colors)];
                  echo '<span class="subject-tag ' . esc_attr($colorClass) . '">' . esc_html($term->name) . '</span>';
                  $i++;
                }
              } ?>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <h3>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(''); ?>
                </a>
              </h3>
              <a href="<?php the_permalink(); ?>" class="d-flex gap-2 align-items-center arrow-link mt-2"><i
                  class="fa-solid fa-arrow-up-long"></i>Meer info</a>
            </div>
          </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </section>
    <div class="btn-yellow mt-5 mx-auto">
      <?php previous_posts_link(); ?>
      <?php next_posts_link(); ?>
    </div>
</main>
<?php get_footer(); ?>