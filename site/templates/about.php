<?php snippet('header') ?>
<div class="TopbarPush"></div>

  <main class="Main fade-in" role="main">
    <div class="MainEl">

      <header class="Heading">
        <h1 class="HeadingTitle"><?= $page->title()->html() ?></h1>
        <p class="HeadingIntro"><?= $page->subtitle()->html() ?></p>
      </header>

      <div class="AboutLayout">

        <div class="AboutHd">
          <?php snippet('coverimage', $page) ?>
        </div>
        <div class="AboutBd">
          <div class="Copy">
            <?= $page->text()->kirbytext() ?>
          </div>
        </div>
        <div class="AboutFt">

          <h2 class="AboutTitle"><?= $page->team()->html() ?></h2>

          <ul class="Tiles">
            <?php foreach($page->children()->visible() as $member): ?>
              <li>
                <div class="Tile">
                  <div>
                    <?php if($image = $member->image()): ?>
                      <figure class="TileThumb">
                        <img src="<?= $image->thumb(
                          array(
                            'width' => 400,
                            'height' => 400,
                            'crop' => true,
                            'grayscale' => true,
                            'quality' => 90
                          ))->url() ?>" alt="Portrait of <?= $member->title()->html() ?>" />
                      </figure>
                    <?php endif ?>
                  </div>
                  <div>
                    <h3 class="TileTitle"><?= $member->title()->html() ?></h3>
                    <p class="TileSubtitle"><?= $member->role()->html() ?></p>
                    <p class="TileText">
                      <a class="Link" href="mailto:<?= $member->email()->html() ?>"><?= $member->email()->html() ?></a></p>
                    </p>
                  </div>
                </div>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
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
