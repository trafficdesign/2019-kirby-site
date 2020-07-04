<?php snippet('header') ?>
<div class="TopbarPush"></div>

  <main class="Main fade-in" role="main">
    <div class="MainEl">

      <header class="td-heading">
        <h1 class="td-heading-title"><?= $page->title()->html() ?></h1>
        <div class="td-heading-subtitle">
          <?= $page->subtitle()->kirbytext() ?>
        </div>
        <p class="td-heading-text"><?= $page->text()->text() ?></p>
      </header>

      <div class="td-layout--offer">
        <div class="td-layout-body">

          <hr class="td-separator"/>

          <div class="td-section td-section--odd">
            <div class="td-section-content">
              <h2><?= $page->buildingstitle()->text() ?></h2>
              <p><?= $page->buildingstext()->text() ?></p>
              <ul>
                <?php foreach($page->buildingsservices()->toStructure() as $buildingsservice): ?>
                  <li><span>/</span> <?= $buildingsservice->menuitem() ?></li>
                <?php endforeach ?>
              </ul>
            </div>
            <div class="td-section-aside">
              <div class="td-aside-slider splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <?php foreach($page->buildingsphotos()->toStructure() as $buildingsphoto): ?>
                    <li class="splide__slide">
                      <img src="<?= $buildingsphoto->image->toFile()->thumb(
                      array(
                        'height' => 400,
                        'quality' => 90,
                      ))->url() ?>" />
                    </li>
                    <?php endforeach ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <?php if(!$page->buildingscasestudy()->empty()): ?>
          <div class="td-section-cta">
            <a href="<?= $page->buildingscasestudy()->text() ?>" class="td-actionable Button">Zobacz nasze realizacje na budynkach</a>
          </div>
          <?php endif ?>

          <hr class="td-separator"/>

          <div class="td-section td-section--even">
            <div class="td-section-content">
              <h2><?= $page->streetstitle()->text() ?></h2>
              <p><?= $page->streetstext()->text() ?></p>
              <ul>
                <?php foreach($page->streetsservices()->toStructure() as $streetsservice): ?>
                  <li><span>/</span> <?= $streetsservice->menuitem() ?></li>
                <?php endforeach ?>
              </ul>
            </div>
            <div class="td-section-aside">
              <div class="td-aside-slider splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <?php foreach($page->streetsphotos()->toStructure() as $streetsphoto): ?>
                    <li class="splide__slide">
                      <img src="<?= $streetsphoto->image->toFile()->thumb(
                      array(
                        'height' => 400,
                        'quality' => 90,
                      ))->url() ?>" />
                    </li>
                    <?php endforeach ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <?php if(!$page->streetscasestudy()->empty()): ?>
          <div class="td-section-cta">
            <a href="<?= $page->streetscasestudy()->text() ?>" class="td-actionable Button">Zobacz nasze realizacje na ulicach</a>
          </div>
          <?php endif ?>

          <hr class="td-separator"/>

          <div class="td-section td-section--odd">
            <div class="td-section-content">
              <h2><?= $page->workshopstitle()->text() ?></h2>
              <p><?= $page->workshopstext()->text() ?></p>
              <ul>
                <?php foreach($page->workshopsservices()->toStructure() as $workshopsservice): ?>
                  <li><span>/</span> <?= $workshopsservice->menuitem() ?></li>
                <?php endforeach ?>
              </ul>
            </div>
            <div class="td-section-aside">
              <div class="td-aside-slider splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <?php foreach($page->workshopsphotos()->toStructure() as $workshopsphoto): ?>
                    <li class="splide__slide">
                      <img src="<?= $workshopsphoto->image->toFile()->thumb(
                      array(
                        'height' => 400,
                        'quality' => 90,
                      ))->url() ?>" />
                    </li>
                    <?php endforeach ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <?php if(!$page->workshopscasestudy()->empty()): ?>
          <div class="td-section-cta">
            <a href="<?= $page->workshopscasestudy()->text() ?>" class="td-actionable Button">Poznaj nasze warsztaty</a>
          </div>
          <?php endif ?>

          <hr class="td-separator"/>

          <div class="td-section td-section--even">
            <div class="td-section-content">
              <h2><?= $page->designtitle()->text() ?></h2>
              <p><?= $page->designtext()->text() ?></p>
              <ul>
                <?php foreach($page->designservices()->toStructure() as $designservice): ?>
                  <li><span>/</span> <?= $designservice->menuitem() ?></li>
                <?php endforeach ?>
              </ul>
            </div>
            <div class="td-section-aside">
              <div class="td-aside-slider splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <?php foreach($page->designphotos()->toStructure() as $designphoto): ?>
                    <li class="splide__slide">
                      <img src="<?= $designphoto->image->toFile()->thumb(
                      array(
                        'height' => 400,
                        'quality' => 90,
                      ))->url() ?>" />
                    </li>
                    <?php endforeach ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <?php if(!$page->designcasestudy()->empty()): ?>
          <div class="td-section-cta">
            <a href="<?= $page->designcasestudy()->text() ?>" class="td-actionable Button">Zobacz co zaprojektowaliśmy</a>
          </div>
          <?php endif ?>

          <hr class="td-separator"/>

          <div class="td-vocative">
            <div class="td-heading">
              <h1 class="td-heading-subtitle"><?= $page->ctatitle()->html() ?></h1>
              <div class="td-heading-text">
                <?= $page->ctatext()->kirbytext() ?>
              </div>
              <a class="td-actionable Button" href="<?php echo $pages->find('kontakt')->url() ?>"
              ><?= l::get('contactUsCta') ?></a>
            </div>
          </div>

          <hr class="td-separator"/>

          <div class="td-clients">
            <h2><?= $page->clientstitle()->text() ?></h2>
            <ul class="Profiles">
              <?php foreach($page->clientslogos()->toStructure() as $client): ?>
                <li>
                  <div class="Profile Partner">
                    <a href="<?= $client->url()->html() ?>" target="_blank">
                      <?php if($image = $client->logo()->toFile()): ?>
                        <figure class="ProfileThumb td-tile">
                        <img src="<?= $image->thumb(
                            array(
                              'height' => 200,
                              'crop' => false,
                              'grayscale' => true,
                              'quality' => 90
                            ))->url() ?>" alt="<?= $client->name()->html() ?>" />
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

    </div>
  </main>

  <div class="FooterWrapper" role="contentinfo">
  <?php snippet('takeaway') ?>
  <?php snippet('footer') ?>
  <?php snippet('mobilenav') ?>
  </div>
  </body>
  </html>
