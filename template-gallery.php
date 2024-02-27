<?php
/*
Template Name: Gallery
*/
?>

<?php get_header(); ?>
<main>
  <?php get_template_part('inc/block', 'header'); ?>
  <!-- Projects section -->
  <section class="container mt-5 mb-5 pt-5 pb-5">
    <div class="d-flex justify-content-between align-items-center">
      <h2 class="col-4">Geselecteerde werken</h2>
      <p class="col-4">Ons toegewijde studenten van aspirerende digitale vormgevers gebruiken hun creativiteit om
        baanbrekende
        ontwerpen
        te creëren.</p>
    </div>
    <hr>
    <div>
      <?php get_template_part('inc/section', 'gallery'); ?>
    </div>
  </section>

  <section class="container mt-5 mb-5 pt-5 pb-5 d-flex flex-column align-items-center">
    <?php get_template_part('inc/section', 'cta'); ?>
  </section>
</main>
<?php get_footer(); ?>