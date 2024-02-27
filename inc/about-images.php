<section id="sfeerbeelden-section" class="mb-5 mt-5 pb-5 pt-5 block-bg">
  <div class="glide-home container">
    <div class="d-flex justify-content-between align-items-center mb-5">
      <h2>Sfeerbeelden</h2>
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
      <ul class="glide__slides pb-2">
        <?php
        //Get the images ids from the post_metadata
        $images = acf_photo_gallery('sfeerbeelden', $post->ID);
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
            <li class="glide__slide">
              <?php if (!empty($url)) { ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true') ? 'target="_blank"' : ''; ?>><?php } ?>
                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                <?php if (!empty($url)) { ?></a>
              <?php } ?>
            </li>
          <?php endforeach; endif; ?>
      </ul>
    </div>

  </div>
</section>