<?php if($image = $item->coverimage()->toFile()): ?>
  <figure class="Cover">
    <img src="<?= $image->thumb(
      array(
        'crop' => true,
        'height' => 900,
        'quality' => 90,
        'width' => 1200,
      ))->url() ?>" alt="" class="CoverImage"/>
  </figure>
<?php endif ?>
