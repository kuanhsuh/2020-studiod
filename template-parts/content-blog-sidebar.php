<?php get_search_form(); ?>
<h3 class="section-heading flex items-center">
  <svg class="h-5 w-5 fill-current text-teal-500 inline-block mt-1 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
    <path d="M2 2c0-1.1.9-2 2-2h12a2 2 0 012 2v18l-8-4-8 4V2z" />
  </svg>
  文章類別
</h3>
<ul class="mt-4">
  <?php
  $categories = get_categories('exclude=1');
  foreach ($categories as $category) {
    echo '
            <li class="blog-sidebar-li"><a class="flex w-full justify-between" href="' . get_category_link($category->term_id) . '">'
      . $category->name . '
            <svg class="h-5 w-5 fill-current text-gray-400 inline-block mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M10 0a10 10 0 110 20 10 10 0 010-20zM2 10a8 8 0 1016 0 8 8 0 00-16 0zm10.54.7L9 14.25l-1.41-1.41L10.4 10 7.6 7.17 9 5.76 13.24 10l-.7.7z" />
            </svg></a>
          </li>';
  }
  ?>
</ul>