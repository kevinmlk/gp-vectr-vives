<?php

// Uitwerking image (1)
$uitwerkingImageOne = get_field('uitwerking_afbeelding_1');
$uitwerkingImageOneURL = $uitwerkingImageOne['sizes']['rectangle-small'];

// Uitwerking image (2)
$uitwerkingImageTwo = get_field('uitwerking_afbeelding_2');
$uitwerkingImageTwoURL = $uitwerkingImageTwo['sizes']['rectangle-small'];
?>

<?php get_header(); ?>
<main>
  <?php get_template_part('inc/block', 'header'); ?>

  <!-- Intro section -->
  <section id="intro-section-project"
    class="container mt-5 mb-5 pt-5 pb-5 d-flex align-items-center gap-5 justify-content-center">
    <div class="col-5 d-flex flex-column gap-3">
      <div class="d-flex gap-3">
        <?php
        $categories = get_categories(
          array(
            'taxonomy' => 'vakken',
          )
        );

        if ($categories):
          foreach ($categories as $cat):
            ?>
            <span class="subject-tag">
              <?php echo $cat->name; ?>
            </span>
          <?php endforeach; endif; ?>
      </div>
      <h3>
        <?php the_field('project_intro_titel') ?>
      </h3>
      <p>
        <?php the_field('project_intro_omschrijving'); ?>
      </p>
    </div>

    <div>
      <?php if (has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('rectangle-small'); ?>" alt="<?php the_title(); ?>">
      <?php endif; ?>
    </div>
  </section>

  <!-- Proces section -->
  <section id="proces-section" class="container-fluid d-flex flex-column align-items-center mt-5 mb-5 pt-5 pb-5">
    <h2 class="text-center mb-5">
      Proces
    </h2>
    <div class="row d-flex justify-content-center gap-5">
      <div class="col-3 proces seagreen d-flex flex-column gap-3">
        <h3>
          Uitdaging
        </h3>
        <p>
          <?php the_field('uitdaging'); ?>
        </p>
      </div>
      <div class="col-3 proces yellow d-flex flex-column gap-3">
        <h3>
          Oplossing
        </h3>
        <p>
          <?php the_field('oplossing'); ?>
        </p>
      </div>
      <div class="col-3 proces purple d-flex flex-column gap-3">
        <h3>
          Resultaat
        </h3>
        <p>
          <?php the_field('resultaat') ?>
        </p>
      </div>
    </div>
  </section>

  <!-- Uitwerking section -->
  <section id="services-section"
    class="container-fluid d-flex flex-column align-items-center mt-5 mb-5 pt-5 pb-5 block-bg">
    <h2 class="text-center mb-5">
      Uitwerking
    </h2>

    <div class="d-flex justify-content-center align-items-center gap-5 mb-5">
      <div class="col-5 d-flex flex-column gap-3">
        <h3>
          <?php the_field('uitwerking_titel_1'); ?>
        </h3>
        <p>
          <?php the_field('uitwerking_omschrijving_1'); ?>
        </p>
      </div>
      <img src="<?php echo $uitwerkingImageOneURL; ?>">
    </div>

    <div class="d-flex justify-content-center align-items-center gap-5 mb-5 image-left">
      <img src="<?php echo $uitwerkingImageTwoURL; ?>">
      <div class="col-5 d-flex flex-column gap-3">
        <h3>
          <?php the_field('uitwerking_titel_2'); ?>
        </h3>
        <p>
          <?php the_field('uitwerking_omschrijving_2'); ?>
        </p>
      </div>
    </div>
  </section>

  <!-- Resultaat section -->
  <section class="container mt-5 mb-5 pt-5 pb-5 d-flex flex-column align-items-center">
    <h2 class="text-center mb-5">Resultaat</h2>
    <div class="image-container-projects">
      <?php
      //Get the images ids from the post_metadata
      $images = acf_photo_gallery('resultaat_afbeeldingen', $post->ID);
      //Check if return array has anything in it
      if (count($images)):
        //Cool, we got some data so now let's loop over it
        foreach ($images as $image):
          $id = $image['id']; // The attachment id of the media
          $title = $image['title']; //The title
          $caption = $image['caption']; //The caption
          $full_image_url = $image['full_image_url']; //Full size image url
          // $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160);
          //Resized size to 262px width by 160px height image url
          $thumbnail_image_url = $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
          $url = $image['url']; //Goto any link when clicked
          $target = $image['target']; //Open normal or new tab
          $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
          $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
          ?>

          <div class="grid-item">
            <?php if (!empty($url)) { ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true') ? 'target="_blank"' : ''; ?>><?php } ?>
              <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
              <?php if (!empty($url)) { ?></a>
            <?php } ?>
          </div>
        <?php endforeach; endif; ?>
    </div>
  </section>

</main>
<?php get_footer(); ?>