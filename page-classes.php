<?php
/* Template Name: Classes Page */
get_header(); ?>
<!-- section title -->
<header class="py-8 bg-teal-800 text-white">
  <div class="container mx-auto">
    <h1 class="page-heading mb-6">程式教學</h1>
    <p class="font-hairline text-xl">這裡有一些SEO，網頁優化，程式教學文章 </p>
  </div>
</header>


<section class="py-0 sm:py-16">
  <div class="container px-3 mx-auto">
    <div class="flex flex-wrap -mx-3 sm:-mx-8">
      <div class="w-full sm:w-3/12 sm:px-8">
        <?php get_template_part('template-parts/content', 'courses-sidebar'); ?>
      </div>
      <div class="w-full sm:w-9/12 mt-6 sm:mt-0 px-6 sm:px-8">
        <h2 class="section-heading block sm:hidden mb-4">所有課程</h2>
        <div class="flex flex-wrap -mx-3 sm:-mx-4">
          <div class="w-full sm:w-1/3 px-4 mb-10">
            <div class="bg-teal-500 h-64 rounded"></div>
          </div>
          <div class="w-full sm:w-1/3 px-4 mb-10">
            <div class="bg-teal-500 h-64 rounded"></div>
          </div>
          <div class="w-full sm:w-1/3 px-4 mb-10">
            <div class="bg-teal-500 h-64 rounded"></div>
          </div>
          <div class="w-full sm:w-1/3 px-4 mb-10">
            <div class="bg-teal-500 h-64 rounded"></div>
          </div>
          <div class="w-full sm:w-1/3 px-4 mb-10">
            <div class="bg-teal-500 h-64 rounded"></div>
          </div>
          <div class="w-full sm:w-1/3 px-4 mb-10">
            <div class="bg-teal-500 h-64 rounded"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
