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

      <section class="UpdatesLayout">
        <?php foreach($news as $item): ?>
          <article class="Update theme--dark">
            <div class="UpdateEl">
              <a class="UpdateHd" href="<?= $item->url() ?>">
                <h2>
                  <span class="Link" ><?= $item->title()->html() ?></span>
                </h2>
              </a>
              <div class="UpdateBd">
                <?php snippet('coverthumb', $item) ?>
              </div>
              <p class="UpdateFt"><span><?= date('d.m.Y', $item->date()) ?></span></p>
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
