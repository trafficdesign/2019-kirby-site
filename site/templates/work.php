<?php snippet('header') ?>
<div class="TopbarPush"></div>

  <main class="Main fade-in" role="main">
    <div class="MainEl">

      <article>

        <header class="td-heading">
          <span class="td-heading-text"><?= $page->parent()->title()->html() ?></span>
          <h1 class="td-heading-title"><?= $page->title()->html() ?></h1>
          <p class="td-heading-caps"><?= date('d.m.Y', $page->date()) ?></p>
        </header>

        <div class="WorkLayout">

          <div class="WorkHd">
            <?php snippet('coverimage', $page) ?>
            <?php if(!$page->city()->empty() or !$page->project()->empty() or !$page->partners()->empty()): ?>
              <div class="WorkDetails">
                <?php if(!$page->city()->empty()): ?>
                  <div>
                    <h2><?= l::get('locationLabel') ?></h2>
                    <?php if(!$page->maplink()->empty()): ?>
                      <a class="td-link" href="<?= $page->maplink()->text() ?>"><?= l($page->content()->city()->value()); ?></a>
                    <?php else: ?>
                      <?= $page->content()->city()->text() ?>
                    <?php endif ?>
                  </div>
                <?php endif ?>
                <?php if(!$page->project()->empty()): ?>
                  <div>
                    <h2><?= l::get('projectLabel') ?></h2>
                    <?php foreach($page->project()->toStructure()->limit(1) as $projectRef): ?>
                      <?php $projectRefUrl = $projectRef->project()->url() ?>
                      <?php $projects = $pages->get('projekty') ?>
                      <?php $project = $projects->children()->findBy('url', $projectRefUrl) ?>
                      <a class="td-link" href="<?= $projectRefUrl ?>"><?= $project->content()->get('title') ?></a>
                    <?php endforeach ?>
                  </div>
                <?php endif ?>
                <?php if(!$page->partners()->empty()): ?>
                  <div>
                    <h2><?= l::get('partnersLabel') ?></h2>
                    <?= $page->content()->partners()->text() ?>
                  </div>
                <?php endif ?>
              </div>
            <?php endif ?>
          </div>
          <div class="WorkBd">
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
          <aside class="WorkFt">
            <div class="Authors">
              <h2 class="AuthorsTitle"><?= l::get('aboutAuthor') ?></h2>
              <ul>
                <?php foreach($page->authors()->toStructure() as $authorRef): ?>
                  <?php $refUrl = $authorRef->author()->url() ?>
                  <?php $authors = $pages->get('authors') ?>
                  <?php $author = $authors->children()->findBy('url', $refUrl) ?>
                  <li class="Author">
                    <div class="AuthorPic">
                      <span class="Avatar">
                        <?= $author->image()->thumb(
                          array(
                            'width' => 300,
                            'height' => 300,
                            'quality' => 90
                          )) ?>
                        </span>
                    </div>
                    <div class="AuthorDetails">
                      <h3><?= $author->content()->get('title') ?></h3>
                      <p><?= $author->content()->get('bio') ?></p>
                    </div>
                  </li>
                <?php endforeach ?>
              </ul>
            </div>
          </aside>

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
