<?php get_template_part('inc/instagram', 'section'); ?>
<footer class="d-flex justify-content-evenly align-items-center">
  <div id="footer-logo" class="col-4 d-flex justify-content-center">
    <?php
    $footerImagePath = get_template_directory_uri() . '/assets/icons/logo-divo-wit.png'; // Relative path to the image file
    $footerImageALT = 'Alt Text'; // Alternative text for the image
    ?>

    <a href="/"><img src="<?php echo esc_url($footerImagePath); ?>" alt="Logo digitale vormgeving"></a>;
  </div>
  <div id="footer-navigation" class="col-4 d-flex justify-content-center">
    <?php
    wp_nav_menu(
      array(
        'theme_lcoation' => 'footer-navigation',
        'menu_class' => 'footer-nav',
      )
    );
    ?>
  </div>
  <div class="footer-socials col-4 d-flex justify-content-center">
    <a href="https://www.instagram.com/vives_divo/" target="_blank"
      class="instagram-icon d-flex justify-content-center align-items-center"><i class="fa-brands fa-instagram"></i></a>
    <a href="https://www.facebook.com/vivestechnology" target="_blank"
      class="facebook-icon d-flex justify-content-center align-items-center"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="https://www.tiktok.com/@vivestechnology?is_from_webapp=1&sender_device=pc" target="_blank"
      class="tiktok-icon d-flex justify-content-center align-items-center"><i class="fa-brands fa-tiktok"></i></a>
    <a href="https://www.linkedin.com/company/vivestechnology/" target="_blank"
      class="linkedin-icon d-flex justify-content-center align-items-center"><i
        class="fa-brands fa-linkedin-in"></i></a>
  </div>
</footer>

<!-- Glide.js -->
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<!-- Home testimonials scripts -->
<script>
  // Home testimonials
  const configHome = {
    type: 'carousel',
    perView: 2,
  };

  new Glide('.glide-home', configHome).mount();

  // About testimonials
  const configAbout = {
    type: 'carousel',
    focusAt: 'center',
    perView: 5,
  };

  new Glide('.glide-about', configAbout).mount();

  // Leerbedrijf projects
  const configVectr = {
    type: 'carousel',
    focusAt: 'center',
    perView: 1,
  };

  new Glide('.glide-vectr', configVectr).mount();
</script>
<?php wp_footer(); ?>
</body>

</html>