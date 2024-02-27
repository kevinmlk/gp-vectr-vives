<?php
// Hero image
$heroImage = get_field('hero_image');
$heroImageURL = $heroImage['sizes']['oval-long'];

// Intro section image
$introSectionImageHome = get_field('intro_image_home');
$introSectionImageHomeURL = $introSectionImageHome['sizes']['oval-long'];

// Programma image (1)
$programmaImageOne = get_field('programma_image_1');
$programmaImageOneURL = $programmaImageOne['sizes']['rectangle-small'];
// Programma image (2)
$programmaImageTwo = get_field('programma_image_2');
$programmaImageTwoURL = $programmaImageTwo['sizes']['rectangle-small'];
// Programma image (3)
$programmaImageThree = get_field('programma_image_3');
$programmaImageThreeURL = $programmaImageThree['sizes']['rectangle-small'];

?>

<?php get_header(); ?>
<main>
  <section id="hero-section" class="container d-flex justify-content-around align-items-center">
    <div id="hero-section-content" class="d-flex flex-column gap-4">
      <h1>
        <?php the_field('hero_section_titel'); ?>
      </h1>
      <p>
        <?php the_field('hero_section_inleiding'); ?>
      </p>
      <div class="d-flex gap-4 align-items-center mt-4">
        <div class="btn-yellow">
          <a href="<?php echo esc_url(home_url('/projecten')); ?>">Portfolio</a>
        </div>
        <a href="<?php echo esc_url(home_url('/leerbedrijf')); ?>" class="d-flex gap-2 align-items-center arrow-link"><i
            class="fa-solid fa-arrow-up-long"></i>Ontdek
          leerbedrijf</a>
      </div>
    </div>
    <div id="hero-section-image">
      <img src="<?php echo $heroImageURL; ?>">
    </div>
  </section>

  <?php get_template_part('inc/marquee', 'dark'); ?>

  <!-- Home intro section -->
  <section class="image-text container d-flex align-items-center justify-content-center gap-4 mt-5 mb-5 pt-5 pb-5">
    <div class="col-3 oval-image">
      <img src="<?php echo $introSectionImageHomeURL ?>" alt="">
    </div>
    <div class="col-5 d-flex flex-column gap-3">
      <h2 class="d-flex position-relative fit-heading">
        <?php the_field('intro_section_titel_home'); ?>
        <span class="title-stars position-absolute top-50 start-100 translate-middle"></span>
      </h2>
      <h3>
        <?php the_field('intro_section_subtitel_home'); ?>
      </h3>
      <p>
        <?php the_field('intro_section_tekst_home'); ?>
      </p>
      <a href="<?php echo esc_url(home_url('/over-ons')); ?>" class="d-flex gap-2 align-items-center arrow-link mt-2"><i
          class="fa-solid fa-arrow-up-long"></i>Meer info</a>
    </div>
  </section>

  <!-- Pijlers section -->
  <section id="pillars-section"
    class="d-flex flex-column align-items-center mt-5 mb-5 pt-5 pb-5 block-bg position-relative">

    <h2 class="text-center mb-5 pb-5">
      <?php the_field('pijler_section_titel'); ?>
    </h2>

    <div id="pillars-container"
      class="d-flex flex-column align-items-center position-absolute top-100 start-50 translate-middle mt-5">
      <div class="pillars container d-flex justify-content-center gap-5 mt-5 pt-5">
        <div class="pillar purple d-flex flex-column gap-3">
          <img src="<?php echo get_template_directory_uri() . '/assets/icons/polaroid-svgrepo-com.svg'; ?>"
            class="mb-2">
          <h3>
            <?php the_field('pijler_titel_1'); ?>
          </h3>
          <p>
            <?php the_field('pijler_tekst_1'); ?>
          </p>
        </div>

        <div class="pillar yellow d-flex flex-column gap-3">
          <img src="<?php echo get_template_directory_uri() . '/assets/icons/game-console-svgrepo-com.svg'; ?>"
            class="mb-2">
          <h3>
            <?php the_field('pijler_titel_2'); ?>
          </h3>
          <p>
            <?php the_field('pijler_tekst_2'); ?>
          </p>
        </div>

        <div class="pillar seagreen d-flex flex-column gap-3">
          <img src="<?php echo get_template_directory_uri() . '/assets/icons/girl-svgrepo-com.svg'; ?>" class="mb-2">
          <h3>
            <?php the_field('pijler_titel_3'); ?>
          </h3>
          <p>
            <?php the_field('pijler_tekst_3') ?>
          </p>
        </div>
      </div>
      <a href="<?php echo esc_url(home_url('/over-ons')); ?>" class="btn-white mt-5">Ontdek meer</a>
    </div>
  </section>

  <!-- Projects section -->
  <section id="projects-section-home" class="container mt-5 mb-5 pt-5 pb-5">
    <div class="d-flex justify-content-between align-items-center mb-5">
      <h2>Projecten</h2>
      <a href="<?php echo esc_url(home_url('/vectr')); ?>" class="d-flex gap-2 align-items-center arrow-link"><i
          class="fa-solid fa-arrow-up-long"></i>Bekijk
        projecten</a>
    </div>
    <div class="row row-cols-2 d-flex justify-content-between projects-container">
      <?php
      $homepageProjects = new WP_Query(
        array(
          'posts_per_page' => 6,
          'post_type' => 'vectr',
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

  <!-- Programma's section -->
  <section id="services-section"
    class="container-fluid d-flex flex-column align-items-center mt-5 mb-5 pt-5 pb-5 block-bg">
    <h2 class="text-center mb-5">
      <?php the_field('programmas_section_titel'); ?>
    </h2>

    <div class="d-flex justify-content-center align-items-center gap-5 mb-5">
      <div class="col-5 d-flex flex-column gap-3">
        <h3>
          <?php the_field('programma_titel_1'); ?>
        </h3>
        <p>
          <?php the_field('programma_beschrijving_1'); ?>
        </p>
        <a href="<?php the_field('programma_url_1'); ?>" class="d-flex gap-2 align-items-center arrow-link mt-2"
          target="_blank"><i class="fa-solid fa-arrow-up-long"></i>Meer info</a>
      </div>
      <img src="<?php echo $programmaImageOneURL; ?>">
    </div>

    <div class="d-flex justify-content-center align-items-center gap-5 mb-5 image-left">
      <img src="<?php echo $programmaImageTwoURL; ?>">
      <div class="col-5 d-flex flex-column gap-3">
        <h3>
          <?php the_field('programma_titel_2'); ?>
        </h3>
        <p>
          <?php the_field('programma_beschrijving_2'); ?>
        </p>
        <a href="<?php the_field('programma_url_2'); ?>" class="d-flex gap-2 align-items-center arrow-link mt-2"
          target="_blank"><i class="fa-solid fa-arrow-up-long"></i>Meer info</a>
      </div>
    </div>

    <div class="d-flex justify-content-center align-items-center gap-5">
      <div class="col-5 d-flex flex-column gap-3">
        <h3>
          <?php the_field('programma_titel_3'); ?>
        </h3>
        <p>
          <?php the_field('programma_beschrijving_3'); ?>
        </p>
        <a href="<?php the_field('programma_url_3'); ?>" class="d-flex gap-2 align-items-center arrow-link mt-2"
          target="_blank"><i class="fa-solid fa-arrow-up-long"></i>Meer info</a>
      </div>
      <img src="<?php echo $programmaImageThreeURL; ?>">
    </div>
  </section>

  <!-- Testimonials carousel -->
  <?php get_template_part('inc/testimonials', 'home'); ?>
</main>
<?php get_footer(); ?>