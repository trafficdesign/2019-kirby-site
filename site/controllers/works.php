<?php

// This is a controller file that contains the logic for the blog template.
// It consists of a single function that returns an associative array with
// template variables.
//
// Learn more about controllers at:
// https://getkirby.com/docs/developer-guide/advanced/controllers

return function($site, $pages, $page) {

  $perpage  = $page->perpage()->int();

  if ($tag = param('tag')) {
    $works = $page->children()
      ->visible()
      ->onlyTranslated()
      ->filterBy('tags', $tag, ',')
      ->sortBy('date', 'asc')
      ->flip()
      ->paginate(($perpage >= 1)? $perpage : 24);
  } else {
    $works = $page->children()
      ->visible()
      ->onlyTranslated()
      ->sortBy('date', 'asc')
      ->flip()
      ->paginate(($perpage >= 1)? $perpage : 24);
  }

  $allworks = $page->children()
    ->visible()
    ->onlyTranslated()
    ->sortBy('date', 'asc')
    ->flip()
    ->paginate(($perpage >= 1)? $perpage : 24);

  return [
    'alltags' => $allworks->pluck('tags', ',', true),
    'pagination' => $works->pagination(),
    'tags' => $works->pluck('tags', ',', true),
    'works'   => $works,
  ];

};
