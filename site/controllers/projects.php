<?php

// This is a controller file that contains the logic for the blog template.
// It consists of a single function that returns an associative array with
// template variables.
//
// Learn more about controllers at:
// https://getkirby.com/docs/developer-guide/advanced/controllers

return function($site, $pages, $page) {

  $perpage  = $page->perpage()->int();
  $projects = $page->children()
                   ->visible()
                   ->onlyTranslated()
                   ->sortBy('date', 'asc')
                   ->flip()
                   ->paginate(($perpage >= 1)? $perpage : 6);

  return [
    'projects'   => $projects,
    'pagination' => $projects->pagination()
  ];

};
