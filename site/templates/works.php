<?php snippet('header') ?>
<div class="TopbarPush"></div>
  <main class="Main fade-in" role="main">
    <div class="MainEl">
      <header class="td-heading">
        <h1 class="td-heading-title"><?= $page->title()->html() ?></h1>
        <?php if($pagination->page() == 1):?>
          <p class="td-heading-subtitle"><?= $page->text()->html() ?></p>
        <?php endif ?>
      </header>
      <section class="WorksLayout">
        <div class="Toolbar">
          <ul class="Tabs">
            <li class="Tab">
              <?php
                if ($tag = param('tag')) {
                  $urlParam = param('tag');
                } else {
                  $urlParam = '';
                }
              ?>
              <a class="TabLink <?= e($urlParam === '', 'is-active', '') ?>" href="<?= url($page->url()) ?>">
                <?= l::get('allWorks') ?>
              </a>
            </li>
            <?php foreach($alltags as $tag): ?>
            <li class="Tab">
              <a class="TabLink <?= e($urlParam === $tag, 'is-active', '') ?>" href="<?= url($page->url() . '/' . url::paramsToString(['tag' => $tag])) ?>">
                <?= l::get($tag) ?>
              </a>
            </li>
            <?php endforeach ?>
          </ul>
        </div>
        <div class="WorksListing">
          <?php foreach($works as $item):
            $url = $item->url();
            $image = $item->coverimage()->toFile()->thumb(array(
              'crop' => true,
              'height' => 300,
              'quality' => 95,
              'width' => 400,
            ));
            $caption = $item->title()->html();
            ?>
              <a class="td-tile td-actionable" href="<?= $url ?>">
                <h2 class="td-tile__title"><span><?= $item->title()->html() ?></span></h2>
                <div class="td-tile__thumb">
                  <?php snippet('tilecover', ['caption' => $caption, 'image' => $image, 'alt' => $caption]) ?>
                </div>
              </a>
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
