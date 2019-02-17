<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> ⋅ <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700" rel="stylesheet">
  <link href="/assets/images/favicon.ico" type="image/png" rel="icon">
  <?= css('assets/bundle/main.css') ?>
  <?= js('assets/bundle/main.js') ?>

  <meta name="author" content="Mogli Studio — https://moglistudio.pl" />
  <meta name="charset" content="utf-8" />
  <meta name="coverage" content="Worldwide" />
  <meta name="designer" content="Mogli Studio — https://moglistudio.pl" />
  <meta name="distribution" content="Global" />
  <meta name="keywords" content="<?= $site->keywords()->html() ?>" />
  <meta name="language" content="<?= site()->language() ? site()->language()->code() : 'en' ?>" />
  <meta name="owner" content="Traffic Design — https://trafficdesign.pl" />
  <meta name="rating" content="General" />
  <meta name="revist-after" content="after 3 days" />
  <meta name="robots" content="index, follow" />
  <meta name="title" content="<?= $site->title()->html() ?> ⋅ <?= $page->title()->html() ?>" />
  <meta name="viewport" content="width=device-width, minimum-scale = 1.0, initial-scale = 1.0, maximum-scale = 5.0, user-scalable=yes, shrink-to-fit=no" />

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:creator" content="@moglistudio" />

  <meta property="og:description" content="<?= $site->description()->html() ?>" />
  <meta property="og:image" content="<?php echo thumb($site->coverimage()->toFile(), array('width' => 1200, 'height' => 630, 'crop' => true ))->url() ?>" />
  <meta property="og:image:secure_url" content="<?php echo thumb($site->coverimage()->toFile(), array('width' => 1200, 'height' => 630, 'crop' => true ))->url() ?>" />
  <meta property="og:locale" content="<?= site()->language() ? site()->language()->code() : 'en' ?>" />
  <meta property="og:site_name" content="Traffic Design" />
  <meta property="og:title" content="<?= $site->title()->html() ?> ⋅ <?= $page->title()->html() ?>" />
  <meta
    property="og:url"
    content="<?= $page->url() ?>"
  />
  <link
    rel="canonical"
    href="<?= $page->url() ?>"
  />

</head>
<body>

  <?php snippet('topbar') ?>
