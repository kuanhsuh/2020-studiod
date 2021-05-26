<?php
/* Template Name: Online Tutor */
get_header(); 
while (have_posts()) : the_post(); ?>
<!-- section title -->
<header class="py-8 bg-teal-800 text-white">
  <div class="container mx-auto">
    <h1 class="page-heading mb-6">線上家教</h1>
    <p class="font-hairline text-xl">如果你有程式問題，需要1對1服務 </p>
  </div>
</header>


<section class="py-0 sm:py-16">
  <div class="container px-3 mx-auto">
    <div class="flex flex-wrap -mx-3 sm:-mx-8">
      <div class="w-full sm:w-3/12 sm:px-8">
        <?php get_template_part('template-parts/content', 'courses-sidebar'); ?>
      </div>
      <div class="w-full sm:w-9/12 mt-6 sm:mt-0 px-6 sm:px-8">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php
endwhile;
get_footer();
