<?php if($image = $item->coverimage()->toFile()): ?>
  <figure class="Cover">
    <img src="<?= $image->thumb(
      array(
        'width' => 500,
        'height' => 340,
        'crop' => true,
        'grayscale' => true,
        'quality' => 90
      ))->url() ?>" alt="" class="CoverImage" width="600" />
  </figure>
<?php endif ?>
