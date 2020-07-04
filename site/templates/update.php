<?php snippet('header') ?>
<div class="TopbarPush"></div>

  <main class="Main fade-in" role="main">
    <div class="MainEl">

      <article>

        <header class="td-heading">
          <span class="td-heading-text">Aktualności</span>
          <h1 class="td-heading-title"><?= $page->title()->html() ?></h1>
          <p class="td-heading-caps"><?= date('d.m.Y', $page->date()) ?></p>
        </header>

        <div class="UpdateLayout">

          <div class="UpdateHd">
            <?php snippet('coverimage', $page) ?>
          </div>
          <div class="UpdateBd">
            <div class="Copy">
              <?= $page->text()->kirbytext() ?>
            </div>
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
