<?php snippet('header') ?>

  <div class="Pitch fade-in"  role="main">
    <div class="PitchImage">
      <?php snippet('pitchimage', $page) ?>
    </div>
    <div class="PitchCopy">
      <div>
        <h1><?= $page->heading()->text() ?></h1>
        <p><?= $page->text()->text() ?></p>
        <div class="Actionbar">
          <a href="<?php echo $pages->find('realizacje')->url() ?>" class="Button"><?= $page->workcta()->text() ?></a>
          <a href="<?php echo $pages->find('aktualnosci')->url() ?>" class="td-link"><?= $page->newscta()->text() ?></a>
        </div>
      </div>
    </div>
  </div>

  <div class="FooterWrapper" role="contentinfo">
  <?php snippet('footer') ?>
  <?php snippet('mobilenav') ?>
  </div>
  </body>
  </html>
