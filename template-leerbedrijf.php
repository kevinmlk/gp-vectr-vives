<?php
/*
Template Name: Leerbedrijf
*/
?>

<?php
// Intro image
$introImage = get_field('intro_section_image_leerbedrijf');
$introImageURL = $introImage['sizes']['oval-long'];

// Mogelijkheden image (1)
$dienstImageOne = get_field('afbeelding_dienst_1');
$dienstImageOneURL = $dienstImageOne['sizes']['rectangle-small'];

// Mogelijkheden image (2)
$dienstImageTwo = get_field('afbeelding_dienst_2');
$dienstImageTwoURL = $dienstImageTwo['sizes']['rectangle-small'];

// Mogelijkheden image (3)
$dienstImageThree = get_field('afbeelding_dienst_3');
$dienstImageThreeURL = $dienstImageThree['sizes']['rectangle-small'];
?>

<?php get_header(); ?>
<main>
  <?php get_template_part('inc/block', 'header'); ?>
  <!-- Intro section -->
  <section class="container image-text d-flex align-items-center justify-content-center gap-4 mt-5 mb-5 pt-5 pb-5">
    <div class="col-3 oval-image">
      <img src="<?php echo $introImageURL ?>" alt="">
    </div>
    <div class="col-5 d-flex flex-column gap-3">
      <h2>
        <?php the_field('intro_section_titel_leerbedrijf'); ?>
      </h2>
      <h3>
        <?php the_field('intro_section_subtitel_leerbedrijf'); ?>
      </h3>
      <p>
        <?php the_field('intro_section_tekst_leerbedrijf'); ?>
      </p>
    </div>
  </section>
  <!-- Realisaties section -->
  <section class="mt-5 mb-5 pt-5 pb-5 block-bg d-flex flex-column align-items-center">
    <div class="glide-vectr container-fluid d-flex flex-column gap-2">
      <div class="container d-flex justify-content-between align-items-center mb-5">
        <h2>Recente realisaties</h2>
        <div class="glide__arrows d-flex gap-3" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i
              class="fa-solid fa-arrow-up-long"></i></button>

          <div class="glide__bullets d-flex align-items-center gap-1" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
            <button class="glide__bullet" data-glide-dir="=3"></button>
            <button class="glide__bullet" data-glide-dir="=4"></button>
            <button class="glide__bullet" data-glide-dir="=5"></button>
          </div>

          <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i
              class="fa-solid fa-arrow-up-long"></i></button>
        </div>
      </div>

      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides d-flex justify-content-center gap-5">
          <?php
          $vectrProjects = new WP_Query(
            array(
              'posts_per_page' => 6,
              'post_type' => 'vectr',
            ),
          );

          while ($vectrProjects->have_posts()):
            $vectrProjects->the_post();
            ?>
            <li class="glide__slide">
              <div class="project-thumb d-flex flex-column gap-3">
                <?php if (has_post_thumbnail()): ?>
                  <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('project-thumb') ?>"
                      alt="<?php the_title(); ?>"></a>
                <?php endif; ?>

                <div class="d-flex justify-content-between align-items-center">
                  <h4>
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>
                  </h4>
                  <a href="<?php the_permalink(); ?>" class="d-flex gap-2 align-items-center arrow-link mt-2"><i
                      class="fa-solid fa-arrow-up-long"></i>Meer info</a>
                </div>
              </div>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
      </div>

      <div class="btn-yellow align-self-center mt-5 mb-2">
        <a href="<?php echo esc_url(home_url('/vectr')); ?>">Realisaties</a>
      </div>
    </div>
  </section>

  <!-- Doeleinden section -->
  <section id="services-section" class="container d-flex flex-column align-items-center mt-5 mb-5 pt-5 pb-5">
    <h2 class="text-center mb-5">
      <?php the_field('diensten_section_titel'); ?>
    </h2>

    <div class="d-flex justify-content-center align-items-center gap-5 mb-5">
      <div class="col-5 d-flex flex-column gap-3">
        <h3>
          <?php the_field('titel_dienst_1'); ?>
        </h3>
        <p>
          <?php the_field('tekst_dienst_1'); ?>
        </p>
      </div>
      <img src="<?php echo $dienstImageOneURL; ?>">
    </div>

    <div class="d-flex justify-content-center align-items-center gap-5 mb-5 image-left">
      <img src="<?php echo $dienstImageTwoURL; ?>">
      <div class="col-5 d-flex flex-column gap-3">
        <h3>
          <?php the_field('titel_dienst_2'); ?>
        </h3>
        <p>
          <?php the_field('tekst_dienst_2'); ?>
        </p>
      </div>
    </div>

    <div class="d-flex justify-content-center align-items-center gap-5">
      <div class="col-5 d-flex flex-column gap-3">
        <h3>
          <?php the_field('titel_dienst_3'); ?>
        </h3>
        <p>
          <?php the_field('tekst_dienst_3'); ?>
        </p>
      </div>
      <img src="<?php echo $dienstImageThreeURL; ?>">
    </div>
  </section>
</main>
<?php get_footer(); ?>