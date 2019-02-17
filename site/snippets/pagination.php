<?php if($pagination->hasPages()): ?>
  <nav class="Pagination">

    <div>
      <?php if($pagination->hasPrevPage()): ?>
        <i class="icon-arrow-left">←</i>
        <a class="PaginationItem Link" href="<?= $pagination->prevPageURL() ?>" rel="prev">
           <?= l::get('newer-items') ?>
        </a>
      <?php else: ?>
        <span class="PaginationItem Link is-inactive">
          <i class="icon-arrow-left">←</i> <?= l::get('newer-items') ?>
        </span>
      <?php endif ?>
    </div>

    <div>
      <?php if($pagination->hasNextPage()): ?>
        <a class="PaginationItem Link" href="<?= $pagination->nextPageURL() ?>" rel="next">
          <?= l::get('older-items') ?>
        </a>
        <i class="icon-arrow-right">→</i>
      <?php else: ?>
        <span class="PaginationItem Link is-inactive">
          <?= l::get('older-items') ?> <i class="icon-arrow-right">→</i>
        </span>
      <?php endif ?>
    </div>

  </nav>
<?php endif ?>
