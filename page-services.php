<?php
/* Template Name: Services Page */
get_header();
while (have_posts()) : the_post(); ?>
  <!-- section title -->
  <header class="py-8 bg-teal-800 text-white">
    <div class="container mx-auto">
      <h1 class="page-heading mb-6">程式相關服務</h1>
      <p class="font-hairline text-xl">這裡有一些SEO，網頁優化，程式教學文章 </p>
    </div>
  </header>

  <section class="py-0 sm:py-16">
    <div class="container px-3 mx-auto">
      <div class="flex flex-wrap -mx-3 sm:-mx-8">
        <div class="w-full sm:w-3/12 px-0 sm:px-8">
          <?php get_template_part('template-parts/content', 'services-sidebar'); ?>
        </div>
        <div class="w-full sm:w-9/12 px-3 sm:px-8 mt-4 sm:mt-0">
          <h1 class="text-3xl font-medium tracking-wide"><?php the_title(); ?></h1>
          <div class="mt-6">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php endwhile; ?>
<?php
get_footer();
