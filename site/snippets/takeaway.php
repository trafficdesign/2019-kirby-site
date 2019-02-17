<aside class="TakeAway">
  <h1>
    <?php echo $pages->find('home')->content()->heading() ?>
  </h1>
  <p><?php echo $pages->find('home')->content()->text() ?></p>
  <div class="Actionbar">
    <a class="Button" href="<?php echo $pages->find('o-nas')->url() ?>">
      <?= l::get('aboutUsCta') ?>
    </a>
    <a
      class="Link"
      href="<?php echo $pages->find('kontakt')->url() ?>"
    ><?= l::get('contactUsCta') ?></a>
  </div>
</aside>
