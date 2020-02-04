<?php $attributes = $attributes ??  ''; ?>
<div class="td-tile__cover" <?= $attributes ?>>
  <div style="display: inline-block; position: relative;">
    <img src="<?= $image->url() ?>" alt="<?= $caption ?>" class="td-tile__cover-insert" />
    <span style="background-image: url(<?= $image->url() ?>)" class="td-tile__cover-overlay"></span>
  </div>
</div>