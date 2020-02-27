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
          <div class="w-full sm:w-6/12 px-4 mb-10">
            <a href="#" class="block card rounded overflow-hidden">
              <img src="https://images.pexels.com/photos/2029253/pexels-photo-2029253.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="">
              <div class="px-4 py-6 border-b-8 border-teal-600">
                <h3 class="mb-4 text-xl">
                  從零開始學CSS, HTML5, RWD網站
                </h3>
                <div class="flex justify-between">
                  <div class="flex items-center">
                    <?php get_template_part('template-parts/content', 'svg-user'); ?>
                    111人
                  </div>

                  <div class="flex items-center">
                    <?php get_template_part('template-parts/content', 'svg-cart'); ?>
                    NT$1,200
                  </div>
                </div>
              </div>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
