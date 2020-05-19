<?php

/*

The $flip parameter can be passed to the snippet to flip
prev/next items visually:

```
<?php snippet('prevnext', ['flip' => true]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

$directionPrev = @$flip ? 'right' : 'left';
$directionNext = @$flip ? 'left'  : 'right';

if($page->hasNextVisible() || $page->hasPrevVisible()): ?>
  <nav class="Pagination <?= !@$flip ?: ' flip' ?> wrap cf">

    <div>
      <?php if($page->hasPrevVisible()): ?>
        <i class="icon-arrow-right">←</i>
        <a class="PaginationItem td-link <?= $directionPrev ?>" href="<?= $page->prevVisible()->url() ?>" rel="prev" title="<?= $page->prevVisible()->title()->html() ?>">
           <?= l::get('newer-item') ?>
        </a>
      <?php else: ?>

        <span class="PaginationItem td-link <?= $directionPrev ?> is-inactive">
          <i class="icon-arrow-right">←</i> <?= l::get('newer-item') ?>
        </span>
      <?php endif ?>
    </div>

    <div>
      <?php if($page->hasNextVisible()): ?>
        <a class="PaginationItem td-link <?= $directionNext ?>" href="<?= $page->nextVisible()->url() ?>" rel="next" title="<?= $page->nextVisible()->title()->html() ?>">
          <?= l::get('older-item') ?>
        </a>
        <i class="icon-arrow-left">→</i>
      <?php else: ?>
        <span class="PaginationItem td-link <?= $directionNext ?> is-inactive">
          <?= l::get('older-item') ?> <i class="icon-arrow-left">→</i>
        </span>
      <?php endif ?>
    </div>

  </nav>
<?php endif ?>
