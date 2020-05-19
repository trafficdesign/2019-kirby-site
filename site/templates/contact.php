<?php snippet('header') ?>
<div class="TopbarPush"></div>

  <main class="Main fade-in" role="main">
    <div class="MainEl">

      <header class="Heading">
        <h1 class="HeadingTitle"><?= $page->title()->html() ?></h1>
        <p class="HeadingIntro"><?= $page->subtitle()->html() ?></p>
      </header>

      <section class="ContactLayout">

          <div class="EmailBits">
            <a class="Button" href="mailto:<?= $page->email()->html() ?>"
            ><?= $page->email()->html() ?></a>
          </div>
          <hr class="Separator" />
          <div class="ContactBits">
            <ul>
              <li>
                <i class="icon-facebook"></i>
                <a
                  class="td-link"
                  href="https://facebook.com/<?= $page->facebook()->html() ?>"
                  target="_blank"
                >
                  facebook.com/<?= $page->facebook()->html() ?>
                </a>
              </li>
              <li>
                <i class="icon-instagram"></i>
                <a
                  class="td-link"
                  href="https://www.instagram.com/<?= $page->instagram()->html() ?>"
                  target="_blank"
                >
                  instagram.com/<?= $page->instagram()->html() ?>
                </a>
              </li>
              <li>
                <i class="icon-linkedin"></i>
                <a
                  class="td-link"
                  href="https://linkedin.com/company/<?= $page->linkedin()->html() ?>/"
                  target="_blank"
                >
                  linkedin.com/…/<?= $page->linkedin()->html() ?>
                </a>
              </li>
            </ul>
          </div>
      </section>

    </div>
  </main>

  <div class="FooterWrapper" role="contentinfo">
  <?php snippet('takeaway') ?>
  <?php snippet('footer') ?>
  <?php snippet('mobilenav') ?>
  </div>
  </body>
  </html>
