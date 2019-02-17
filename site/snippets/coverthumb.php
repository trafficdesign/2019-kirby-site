<?php if($image = $item->coverimage()->toFile()): ?>
  <figure class="Cover">
    <img src="<?= $image->thumb(
      array(
        'width' => 600,
        'height' => 400,
        'crop' => true,
        'grayscale' => true,
        'quality' => 90
      ))->url() ?>" alt="" class="CoverImage"/>
  </figure>
<?php endif ?>
