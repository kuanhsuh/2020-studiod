<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package studiod
 */

get_header();
?>

<!-- Component About Us -->
<section class="py-10 mt-20">
  <div class="container max-w-3xl mx-auto px-4 sm:px-0">
    <h2 class="text-center text-3xl my-8 flex flex-col font-normal">頁面找不到... <span class="font-serif uppercase tracking-widest text-lg font-light text-gray-500">Page Can't Be Found</span></h2>
    <div class="flex justify-center -mx-2 text-xl ">
      <?php get_template_part('template-parts/content', 'svg-404'); ?>
    </div>
  </div>

</section>

<?php
get_footer();
