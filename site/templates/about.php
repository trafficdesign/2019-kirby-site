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

          <ul class="Profiles">
            <?php foreach($page->children()->visible() as $member): ?>
              <li>
                <div class="Profile">
                  <div>
                    <?php if($image = $member->image()): ?>
                      <figure class="ProfileThumb td-tile">
                        <div class="td-tile__thumb">
                          <?php snippet('tilecover', ['caption' => $member->title()->html(), 'image' => $image->thumb(
                          array(
                            'width' => 400,
                            'height' => 400,
                            'crop' => true,
                            'grayscale' => true,
                            'quality' => 90
                          ))]) ?>
                        </div>
                    </figure>
                    <?php endif ?>
                  </div>
                  <div>
                    <h3 class="ProfileTitle"><?= $member->title()->html() ?></h3>
                    <p class="ProfileSubtitle"><?= $member->role()->html() ?></p>
                    <p class="ProfileText">
                      <a class="td-link" href="mailto:<?= $member->email()->html() ?>"><?= $member->email()->html() ?></a></p>
                    </p>
                  </div>
                </div>
              </li>
            <?php endforeach ?>
          </ul>

          <h2 class="PartnersTitle"><?= $page->partnersTitle()->html() ?></h2>
          <ul class="Profiles">
            <?php foreach($page->partners()->toStructure() as $partner): ?>
              <li>
                <div class="Profile Partner">
                  <a href="<?= $partner->url()->html() ?>" target="_blank">
                    <?php if($image = $partner->logo()->toFile()): ?>
                      <figure class="ProfileThumb td-tile">
                       <img src="<?= $image->thumb(
                          array(
                            'height' => 200,
                            'crop' => false,
                            'grayscale' => true,
                            'quality' => 90
                          ))->url() ?>" alt="<?= $partner->name()->html() ?>" />
                    </figure>
                    <?php endif ?>
                  </a>
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
