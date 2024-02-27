<?php
/*
Template Name: About
*/
?>

<?php
$introImage = get_field('intro_section_image_about');
$introImageURL = $introImage['sizes']['oval-long'];

// Testimonial image (1)
$testimonialImageOne = get_field('afbeelding_testimonial_student_1');
$testimonialImageOneURL = $testimonialImageOne['sizes']['circle-small'];
// Testimonial image (2)
$testimonialImageTwo = get_field('afbeelding_testimonial_student_2');
$testimonialImageTwoURL = $testimonialImageTwo['sizes']['circle-small'];
// Testimonial image (3)
$testimonialImageThree = get_field('afbeelding_testimonial_student_3');
$testimonialImageThreeURL = $testimonialImageThree['sizes']['circle-small'];
// Testimonial image (4)
$testimonialImageFour = get_field('afbeelding_testimonial_student_4');
$testimonialImageFourURL = $testimonialImageFour['sizes']['circle-small'];
// Testimonial image (5)
$testimonialImageFive = get_field('afbeelding_testimonial_student_5');
$testimonialImageFiveURL = $testimonialImageFive['sizes']['circle-small'];
// Testimonial image (6)
$testimonialImageSix = get_field('afbeelding_testimonial_student_6');
$testimonialImageSixURL = $testimonialImageSix['sizes']['circle-small'];
?>

<?php get_header(); ?>
<main>
  <?php get_template_part('inc/block', 'header'); ?>
  <section id="intro-about"
    class="container d-flex align-items-center justify-content-center gap-5 mt-5 mb-5 pt-5 pb-5">
    <div class="col-5 d-flex flex-column gap-3">
      <h2>
        <?php the_field('intro_section_titel_about'); ?>
      </h2>
      <h3>
        <?php the_field('intro_section_subtitel_about'); ?>
      </h3>
      <p>
        <?php the_field('intro_section_tekst_about'); ?>
      </p>
    </div>
    <div class="col-3 image-right">
      <img src="<?php echo $introImageURL; ?>" alt="">
    </div>
  </section>

  <!-- Pijlers section -->
  <section id="pillars-section"
    class="d-flex flex-column align-items-center mt-5 mb-5 pt-5 pb-5 block-bg position-relative">

    <h2 class="text-center mb-5 pb-5">
      <?php the_field('pijlers_section_titel_about'); ?>
    </h2>

    <div id="pillars-container-alt"
      class="d-flex justify-content-center position-absolute top-100 start-50 translate-middle mt-5 mb-5 pb-5">
      <div class="position-relative d-flex">
        <div id="pillar-seagreen"
          class="col-3 pillar seagreen d-flex flex-column gap-3 position-absolute top-50 end-0 translate-middle-y">
          <img src="<?php echo get_template_directory_uri() . '/assets/icons/polaroid-svgrepo-com.svg'; ?>"
            class="mb-2">
          <h3>
            <?php the_field('pijler_titel_about_1'); ?>
          </h3>
          <p>
            <?php the_field('pijler_tekst_about_1'); ?>
          </p>
        </div>

        <div id="pillar-purple"
          class="col-3 pillar purple d-flex flex-column gap-3 position-absolute top-50 start-50 translate-middle">
          <img src="<?php echo get_template_directory_uri() . '/assets/icons/game-console-svgrepo-com.svg'; ?>"
            class="mb-2">
          <h3>
            <?php the_field('pijler_titel_about_2'); ?>
          </h3>
          <p>
            <?php the_field('pijler_tekst_about_2'); ?>
          </p>
        </div>

        <div id="pillar-yellow"
          class="col-3 pillar yellow d-flex flex-column gap-3 position-absolute top-50 start-0 translate-middle-y">
          <img src="<?php echo get_template_directory_uri() . '/assets/icons/girl-svgrepo-com.svg'; ?>" class="mb-2">
          <h3>
            <?php the_field('pijler_titel_about_3'); ?>
          </h3>
          <p>
            <?php the_field('pijler_tekst_about_3') ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sfeerbeelden carousel -->
  <?php get_template_part('inc/about', 'images'); ?>

  <!-- CTA section -->
  <section id="cta-section" class="container mt-5 mb-5 pt-5 pb-5 d-flex flex-column align-items-center">
    <?php get_template_part('inc/section', 'cta'); ?>
  </section>

  <!-- Manifesto section -->
  <section id="manifesto-section" class="position-relative block-bg mt-5 mb-5">
    <div id="manifesto-bg" class="position-absolute top-0 start-50 translate-middle"></div>
  </section>

  <?php get_template_part('inc/testimonials', 'about'); ?>

</main>
<?php get_footer(); ?>