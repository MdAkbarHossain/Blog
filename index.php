<?php
  require_once('functions/frontend.php');

  $page_content->getHeader();
  $page_content->getContent('slider');
  $page_content->getContent('feature');
  $page_content->getContent('news');
  $page_content->getContent('popular');
  $page_content->getContent('articles');
  $page_content->getContent('blog_carousel');
  $page_content->getContent('sidebar_page');
  $page_content->getFooter();
