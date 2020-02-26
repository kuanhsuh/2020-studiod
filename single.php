<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package studiod
 */

get_header();
?>
<?php
while (have_posts()) : the_post(); ?>
  <!-- section title  -->

  <header class="container mx-auto">
    <?php the_post_thumbnail('large', array('class' => 'single-heading-img')); ?>
  </header>


  <section class="py-0 sm:py-16 single">
    <div class="container px-3 mx-auto">
      <div class="flex flex-wrap -mx-3 sm:-mx-8">
        <div class="w-full sm:w-8/12 px-4 sm:px-8">
          <article class="mt-4 sm:mt-0">
            <h1><?php the_title(); ?></h1>
            <ul class="flex font-normal mt-2 text-sm text-gray-500 mb-6 ">
              <li><?php the_time('F j, Y'); ?></li><span class="mx-2">|</span>
              <li><?php the_category(", ", ""); ?></li><span class="mx-2">|</span>
              <li><?php the_tags(null, ", "); ?></li><span class="mx-2">|</span>
              <li>No comments</li>
            </ul>

            <?php the_content(); ?>
          </article>
          <hr class="my-6">
        <?php endwhile; ?>
        <?php get_template_part('template-parts/content', 'author'); ?>
        <?php get_template_part('template-parts/content', 'share'); ?>
        </div>
        <div class="w-full sm:w-4/12 px-8">
          <?php get_template_part('template-parts/content', 'blog-sidebar'); ?>
        </div>
      </div>
    </div>
  </section>
  <?php
  get_footer();
