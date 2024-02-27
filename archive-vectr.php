<?php get_header(); ?>
<main>
  <section class="block-bg alt-hero-section d-flex flex-column gap-3 justify-content-center align-items-center">
    <h1>Vectr projecten</h1>
    <p>
      Bekijk enkele projecten en ontwerpen van onze (oud)studenten digitale vormgeving.
    </p>
  </section>
  <!-- Projects section -->
  <section class="container mt-5 mb-5 pt-5 d-flex flex-column">
    <div class="d-flex justify-content-between align-items-center">
      <h2 class="col-4">Geselecteerde werken</h2>
      <p class="col-4">Ons toegewijde studenten van aspirerende digitale vormgevers gebruiken hun creativiteit om
        baanbrekende
        ontwerpen
        te creëren.</p>
    </div>
    <hr>
    <div class="subjects-filter pt-5 pb-5 d-flex gap-3" id="subjects-filter">
      <?php $archive_link = get_post_type_archive_link('post');
      ?>
      <a href="<?php echo get_post_type_archive_link('post'); ?>" class="filter-all-link">Alles</a>
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
    <?php get_template_part('inc/section', 'archive'); ?>
  </section>
</main>
<?php get_footer(); ?>