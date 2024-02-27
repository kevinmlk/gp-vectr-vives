<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
<main>
  <?php get_template_part('inc/block', 'header'); ?>
  <!-- Form section -->
  <section id="contact-form-section" class="container mt-5 mb-5 pt-5 pb-5 d-flex justify-content-around">
    <?php get_template_part('inc/form', 'enquiry'); ?>

    <!-- Contact aside -->
    <aside class="col-3">
      <h2 class="mb-5">Contact</h2>
      <div class="d-flex flex-column gap-3">
        <h3>Opleidingshoofd</h3>
        <ul class="d-flex flex-column gap-3">
          <li>
            <?php the_field('locatie_opleidingshoofd'); ?>
          </li>
          <li>
            <a href="tel:<?php the_field('gsm_nummer_opleidingshoofd'); ?>">
              <?php the_field('gsm_nummer_opleidingshoofd'); ?>
            </a>
          </li>
          <li>
            <a href="mailto:<?php the_field('email_opleidingshoofd'); ?>">
              <?php the_field('email_opleidingshoofd'); ?>
            </a>
          </li>
        </ul>
      </div>

      <div class="d-flex flex-column gap-3 mt-4">
        <h3>Hogeschool VIVES</h3>
        <ul class="d-flex flex-column gap-3">
          <li>
            <?php the_field('locatie_instelling'); ?>
          </li>
          <li>
            <a href="tel:<?php the_field('gsm_nummer_instelling'); ?>">
              <?php the_field('gsm_nummer_instelling'); ?>
            </a>
          </li>
          <li>
            <a href="mailto:<?php the_field('email_instelling'); ?>">
              <?php the_field('email_instelling'); ?>
            </a>
          </li>
        </ul>
        <div class="contact-socials d-flex gap-3">
          <a href="https://www.instagram.com/vives_cdd/" target="_blank"
            class="instagram-icon d-flex justify-content-center align-items-center"><i
              class="fa-brands fa-instagram"></i></a>
          <a href="https://www.facebook.com/vivestechnology" target="_blank"
            class="facebook-icon d-flex justify-content-center align-items-center"><i
              class="fa-brands fa-facebook-f"></i></a>
          <a href="https://www.tiktok.com/@vivestechnology?is_from_webapp=1&sender_device=pc" target="_blank"
            class="tiktok-icon d-flex justify-content-center align-items-center"><i class="fa-brands fa-tiktok"></i></a>
          <a href="https://www.linkedin.com/company/vivestechnology/" target="_blank"
            class="linkedin-icon d-flex justify-content-center align-items-center"><i
              class="fa-brands fa-linkedin-in"></i></a>
        </div>
      </div>
    </aside>
  </section>

  <!-- CTA section -->
  <section class="container mt-5 mb-5 pt-5 pb-5 d-flex flex-column align-items-center">
    <?php get_template_part('inc/section', 'cta'); ?>
  </section>
</main>
<?php get_footer(); ?>