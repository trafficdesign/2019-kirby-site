<?php snippet('header') ?>
<div class="TopbarPush"></div>

  <main class="Main fade-in" role="main">
    <div class="MainEl">

      <header class="Heading">
        <h1 class="HeadingTitle"><?= $page->title()->html() ?></h1>
        <?php if($pagination->page() == 1):?>
          <p class="HeadingSubtitle"><?= $page->text()->html() ?></p>
        <?php endif ?>
      </header>

      <section class="WorksLayout">

        <div class="Toolbar">
          <ul class="Tabs">

            <li class="Tab">
              <? $urlParam = param('tag'); ?>
              <a class="TabLink <?php e($urlParam, '', ' is-active') ?>" href="<?= url($page->url()) ?>">
                <?= l::get('allWorks') ?>
              </a>
            </li>
            <?php foreach($tags as $tag): ?>
            <li class="Tab">
              <a class="TabLink<? if(v::same(kirby()->request()->params()->tag(), $tag)) {
                echo ' is-active';
              } ?>" href="<?= url($page->url() . '/' . url::paramsToString(['tag' => $tag])) ?>">
                <?= l::get($tag) ?>
              </a>
            </li>
            <?php endforeach ?>

          </ul>
        </div>

        <div class="WorksListing">
          <?php foreach($works as $item): ?>
            <article class="Work theme--dark">
              <div class="WorkEl">
                <a class="WorkHd" href="<?= $item->url() ?>">
                  <h2>
                    <span class="Link" ><?= $item->title()->html() ?></span>
                  </h2>
                </a>
                <div class="WorkBd">
                  <?php snippet('coverthumb', $item) ?>
                </div>
              </div>
            </article>
          <?php endforeach ?>

        </div>

      </section>

      <?php snippet('pagination') ?>

    </div>
  </main>

  <div class="FooterWrapper" role="contentinfo">
  <?php snippet('takeaway') ?>
  <?php snippet('footer') ?>
  <?php snippet('mobilenav') ?>
  </div>
  </body>
  </html>
