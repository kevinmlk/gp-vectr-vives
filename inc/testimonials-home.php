<?php
// Testimonial image (1)
$testimonialImageOne = get_field('afbeelding_testimonial_1');
$testimonialImageOneURL = $testimonialImageOne['sizes']['circle-small'];
// Testimonial image (2)
$testimonialImageTwo = get_field('afbeelding_testimonial_2');
$testimonialImageTwoURL = $testimonialImageTwo['sizes']['circle-small'];
// Testimonial image (3)
$testimonialImageThree = get_field('afbeelding_testimonial_3');
$testimonialImageThreeURL = $testimonialImageThree['sizes']['circle-small'];
// Testimonial image (4)
$testimonialImageFour = get_field('afbeelding_testimonial_4');
$testimonialImageFourURL = $testimonialImageFour['sizes']['circle-small'];
// Testimonial image (5)
$testimonialImageFive = get_field('afbeelding_testimonial_5');
$testimonialImageFiveURL = $testimonialImageFive['sizes']['circle-small'];
// Testimonial image (6)
$testimonialImageSix = get_field('afbeelding_testimonial_6');
$testimonialImageSixURL = $testimonialImageSix['sizes']['circle-small'];
?>

<section id="testimonials-section-home" class="container mb-5 mt-5 pb-5 pt-5">
  <div class="glide-home">
    <div class="d-flex justify-content-between align-items-center mb-5">
      <h2>Testimonials</h2>
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
      <ul class="glide__slides d-flex justify-content-between pb-2">
        <li class="glide__slide testimonial-home d-flex gap-4 align-items-center purple">
          <div class="testimonial-profile d-flex flex-column align-items-center gap-3">
            <img src="<?php echo $testimonialImageOneURL; ?>" alt="">
            <h4>
              <?php the_field('naam_testimonial_1'); ?>
            </h4>
            <div class="testimonial-home-stars d-flex gap-1">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
          </div>

          <div class="d-flex flex-column gap-2 testimonial-home-text">
            <i class="fa-solid fa-quote-right d-flex align-self-start"></i>
            <p>
              <?php the_field('tekst_testimonial_1'); ?>
            </p>
          </div>
        </li>

        <li class="glide__slide testimonial-home d-flex gap-4 align-items-center yellow">
          <div class="testimonial-profile d-flex flex-column align-items-center gap-3">
            <img src="<?php echo $testimonialImageTwoURL; ?>" alt="">
            <h4>
              <?php the_field('naam_testimonial_2'); ?>
            </h4>
            <div class="testimonial-home-stars d-flex gap-1">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
          </div>

          <div class="d-flex flex-column gap-2 testimonial-home-text">
            <i class="fa-solid fa-quote-right d-flex align-self-start"></i>
            <p>
              <?php the_field('tekst_testimonial_2'); ?>
            </p>
          </div>
        </li>

        <li class="glide__slide testimonial-home d-flex gap-4 align-items-center seagreen">
          <div class="testimonial-profile d-flex flex-column align-items-center gap-3">
            <img src="<?php echo $testimonialImageThreeURL; ?>" alt="">
            <h4>
              <?php the_field('naam_testimonial_3'); ?>
            </h4>
            <div class="testimonial-home-stars d-flex gap-1">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
          </div>

          <div class="d-flex flex-column gap-2 testimonial-home-text">
            <i class="fa-solid fa-quote-right d-flex align-self-start"></i>
            <p>
              <?php the_field('tekst_testimonial_3'); ?>
            </p>
          </div>
        </li>

        <li class="glide__slide testimonial-home d-flex gap-4 align-items-center purple">
          <div class="testimonial-profile d-flex flex-column align-items-center gap-3">
            <img src="<?php echo $testimonialImageFourURL; ?>" alt="">
            <h4>
              <?php the_field('naam_testimonial_4'); ?>
            </h4>
            <div class="testimonial-home-stars d-flex gap-1">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
          </div>

          <div class="d-flex flex-column gap-2 testimonial-home-text">
            <i class="fa-solid fa-quote-right d-flex align-self-start"></i>
            <p>
              <?php the_field('tekst_testimonial_4'); ?>
            </p>
          </div>
        </li>

        <li class="glide__slide testimonial-home d-flex gap-4 align-items-center yellow">
          <div class="testimonial-profile d-flex flex-column align-items-center gap-3">
            <img src="<?php echo $testimonialImageFiveURL; ?>" alt="">
            <h4>
              <?php the_field('naam_testimonial_5'); ?>
            </h4>
            <div class="testimonial-home-stars d-flex gap-1">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
          </div>

          <div class="d-flex flex-column gap-2 testimonial-home-text">
            <i class="fa-solid fa-quote-right d-flex align-self-start"></i>
            <p>
              <?php the_field('tekst_testimonial_5'); ?>
            </p>
          </div>
        </li>

        <li class="glide__slide testimonial-home d-flex gap-4 align-items-center seagreen">
          <div class="testimonial-profile d-flex flex-column align-items-center gap-3">
            <img src="<?php echo $testimonialImageSixURL; ?>" alt="">
            <h4>
              <?php the_field('naam_testimonial_6'); ?>
            </h4>
            <div class="testimonial-home-stars d-flex gap-1">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
          </div>

          <div class="d-flex flex-column gap-2 testimonial-home-text">
            <i class="fa-solid fa-quote-right d-flex align-self-start"></i>
            <p>
              <?php the_field('tekst_testimonial_6'); ?>
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>