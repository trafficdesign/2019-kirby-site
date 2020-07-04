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

      <section class="PostsLayout">
        <?php foreach($projects as $item): ?>
          <article class="Post">
            <div class="PostEl theme--dark">
              <a class="PostHd" href="<?= $item->url() ?>">
                <h2>
                  <span class="td-link" ><?= $item->title()->html() ?></span>
                </h2>
              </a>
              <div class="PostBd">
                <?php snippet('coverthumb', $item) ?>
              </div>
            </div>
            <div class="PostFt">
              <p><?= $item->intro() ?></p>
              <p>
                <a class="Action" href="<?= $item->url() ?>">
                  <span class="td-link" ><?= l::get('read-more') ?></span>
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
