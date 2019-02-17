<?php snippet('header') ?>
<div class="TopbarPush"></div>

  <main class="main" role="main">
    <div class="MainEl">

      <header class="wrap">
        <h1><?= $page->title()->html() ?></h1>
        <div class="intro text">
          <?= $page->intro()->kirbytext() ?>
        </div>
        <hr />
      </header>

      <div class="text wrap">
        <?= $page->text()->kirbytext() ?>
      </div>

    </div>
  </main>

<div class="FooterWrapper" role="contentinfo">
<?php snippet('takeaway') ?>
<?php snippet('footer') ?>
<?php snippet('mobilenav') ?>
</div>
</body>
</html>
