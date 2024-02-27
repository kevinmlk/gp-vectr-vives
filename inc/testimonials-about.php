<?php
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

<!-- Testimonials carousel -->
<section class="mb-5 mt-5 pb-5 pt-5">
  <div class="glide-about">

    <div class="container d-flex justify-content-between align-items-center mb-5">
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

    <div class="glide">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <li class="glide__slide">
            <div class="about-test text-center d-flex flex-column gap-3">
              <p>
                <?php the_field('tekst_student_testimonial_1'); ?>
              </p>
              <div class="d-flex flex-column justify-content-center align-items-center gap-3">
                <img src="<?php echo $testimonialImageOneURL; ?>">
                <span>
                  <?php the_field('naam_student_testimonial_1'); ?>
                </span>
              </div>
            </div>
          </li>

          <li class="glide__slide">
            <div class="about-test text-center d-flex flex-column gap-3">
              <p>
                <?php the_field('tekst_student_testimonial_2'); ?>
              </p>
              <div class="d-flex flex-column justify-content-center align-items-center gap-3">
                <img src="<?php echo $testimonialImageTwoURL; ?>">
                <span>
                  <?php the_field('naam_student_testimonial_2'); ?>
                </span>
              </div>
            </div>
          </li>

          <li class="glide__slide">
            <div class="about-test text-center d-flex flex-column gap-3">
              <p>
                <?php the_field('tekst_student_testimonial_3'); ?>
              </p>
              <div class="d-flex flex-column justify-content-center align-items-center gap-3">
                <img src="<?php echo $testimonialImageThreeURL; ?>">
                <span>
                  <?php the_field('naam_student_testimonial_3'); ?>
                </span>
              </div>
            </div>
          </li>

          <li class="glide__slide">
            <div class="about-test text-center d-flex flex-column gap-3">
              <p>
                <?php the_field('tekst_student_testimonial_4'); ?>
              </p>
              <div class="d-flex flex-column justify-content-center align-items-center gap-3">
                <img src="<?php echo $testimonialImageFourURL; ?>">
                <span>
                  <?php the_field('naam_student_testimonial_4'); ?>
                </span>
              </div>
            </div>
          </li>

          <li class="glide__slide">
            <div class="about-test text-center d-flex flex-column gap-3">
              <p>
                <?php the_field('tekst_student_testimonial_5'); ?>
              </p>
              <div class="d-flex flex-column justify-content-center align-items-center gap-3">
                <img src="<?php echo $testimonialImageFiveURL; ?>">
                <span>
                  <?php the_field('naam_student_testimonial_5'); ?>
                </span>
              </div>
            </div>
          </li>

          <li class="glide__slide">
            <div class="about-test text-center d-flex flex-column gap-3">
              <p>
                <?php the_field('tekst_student_testimonial_6'); ?>
              </p>
              <div class="d-flex flex-column justify-content-center align-items-center gap-3">
                <img src="<?php echo $testimonialImageSixURL; ?>">
                <span>
                  <?php the_field('naam_student_testimonial_6'); ?>
                </span>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </div>
</section>