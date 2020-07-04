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

      <section class="UpdatesLayout">
        <?php foreach($news as $item):
            $url = $item->url();
            $image = $item->coverimage()->toFile()->thumb(array(
              'crop' => true,
              'height' => 340,
              'quality' => 95,
              'width' => 500,
            ));
            $caption = $item->title()->html();
            ?>
            <article class="Update theme--dark">
              <a class="td-tile td-actionable" href="<?= $url ?>">
                <h2 class="td-tile__title persist"><span><?= $item->title()->html() ?></span></h2>
                <div class="td-tile__thumb">
                  <?php snippet('tilecover', ['caption' => $caption, 'image' => $image, 'alt' => $caption]) ?>
                </div>
                <p class="td-tile__ft"><span><?= date('d.m.Y', $item->date()) ?></span></p>
              </a>
            </article>
          <?php endforeach ?>
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
