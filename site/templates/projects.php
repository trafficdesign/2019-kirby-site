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

      <section class="ProjectsLayout">
        <?php foreach($projects as $item):
          $image = $item->coverimage()->toFile()->thumb(array(
            'crop' => true,
            'height' => 600,
            'quality' => 95,
            'width' => 800,
          ));
          $caption = $item->title()->html();
        ?>
          <article class="Project">
            <a class="td-tile td-actionable" href="<?= $item->url() ?>">
              <h2 class="td-tile__title persist"><span><?= $item->title()->html() ?></span></h2>
              <div class="td-tile__thumb">
                <?php snippet('tilecover', ['caption' => $caption, 'image' => $image, 'alt' => $caption]) ?>
              </div>
            </a>
            <div class="ProjectFt">
              <p><?= $item->intro() ?></p>
              <p>
                <a class="Action" href="<?= $item->url() ?>">
                  <span class="Link" ><?= l::get('read-more') ?></span>
                </a>
              </p>
            </div>
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
