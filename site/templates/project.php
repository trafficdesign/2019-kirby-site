<?php snippet('header') ?>
<div class="TopbarPush"></div>

  <main class="Main fade-in" role="main">
    <div class="MainEl">

      <article>

        <header class="Heading">
          <span class="HeadingIntro"><?= $page->parent()->title()->html() ?></span>
          <h1 class="HeadingTitle"><?= $page->title()->html() ?></h1>
          <p class="HeadingCaps"><?= date('m.Y', $page->date()) ?></p>
        </header>

        <div class="ProjectLayout">

          <div class="ProjectHd">
            <?php snippet('coverimage', $page) ?>
          </div>
          <div class="ProjectBd">
            <div class="Copy">
              <?= $page->text()->kirbytext() ?>
            </div>
            <ul class="Gallery" id="lightgallery">
              <?php
                // Images for the "project" template are sortable. You
                // can change the display by clicking the 'edit' button
                // above the files list in the sidebar.
                foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
                  <li data-src="<?= $image->thumb(
                    array(
                      'quality' => 90,
                      'width' => 1000,
                    ))->url() ?>">
                    <figure>
                      <img src="<?= $image->thumb(
                        array(
                          'crop' => true,
                          'height' => 300,
                          'quality' => 90,
                          'width' => 400,
                        ))->url() ?>" alt="<?= $page->title()->html() ?>"
                      />
                    </figure>
                  </li>
              <?php endforeach ?>
            </ul>
          </div>

        </div>

      </article>

      <?php snippet('prevnext', ['flip' => true]) ?>

    </div>
  </main>

  <div class="FooterWrapper" role="contentinfo">
  <?php snippet('takeaway') ?>
  <?php snippet('footer') ?>
  <?php snippet('mobilenav') ?>
  </div>
  </body>
  </html>
