<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package studiod
 */
$client_name = get_field('client_name');
$client_url = get_field('client_url');
$client_date = get_field('client_date');
$client_tag = get_field('client_tag');
get_header();
?>
<?php
while (have_posts()) : the_post(); ?>
  <!-- section title -->
  <header class="py-8 bg-teal-800 text-white">
    <div class="container mx-auto">
      <h1 class="page-heading mb-6">作品</h1>
      <p class="font-hairline text-xl">高雄最專業的程式團隊，後端開發，UI/UX設計，前端開發</p>
    </div>
  </header>
  <!-- section title -->

  <section class="py-0 sm:py-16 ">
    <div class="container px-3 mx-auto">
      <div class="flex flex-wrap -mx-3 sm:-mx-8">
        <div class="w-full sm:w-3/12 px-0 sm:px-8">
          <?php get_template_part('template-parts/content', 'portfolio-sidebar'); ?>
        </div>
        <div class="w-full sm:w-9/12 px-3 sm:px-8 mt-4 sm:mt-0">
          <h2 class="text-3xl font-medium mb-6"><?php the_title(); ?></h2>
          <?php
          if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail('full', array(
              'class' => '', 'alt'  => trim(strip_tags($post->post_title)),
              'title'  => trim(strip_tags($post->post_title))
            )); // show featured image
          } ?>
          <?php the_content(); ?>
        <?php endwhile;
      wp_reset_query(); ?>

        <h3>相關作品</h3>
        <div class="flex flex-wrap sm:-mx-2">
          <?php
          //for use in the loop, list 5 post titles related to first tag on current post
          $args = array(
            'post_type' => array('project', 'optimization'),
            'posts_per_page' => 3,
            'orderby' => 'rand',
          );
          $my_query = new WP_Query($args);
          if ($my_query->have_posts()) {
            while ($my_query->have_posts()) : $my_query->the_post(); ?>
              <div class="w-full sm:w-1/3 px-2">
                <a href="<?php the_permalink() ?>" class="">
                  <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('medium_large', array('class'  => 'w-full'));
                  } ?>
                  <h4 class="text-center mt-2 text-sm"><?php the_title(); ?></h4>
                </a>
              </div>
          <?php
            endwhile;
          }
          wp_reset_query();
          ?>
        </div>

        </div> <!-- flex -->

      </div><!-- container -->
  </section>

  <?php
  get_footer();
