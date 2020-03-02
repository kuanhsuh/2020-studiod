<?php
/* Template Name: Free Class Page */
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
        <h2 class="section-heading block sm:hidden mb-4">免費資源</h2>
        <div class="flex flex-wrap -mx-3 sm:-mx-4">
          <!-- card -->
          <div class="w-full sm:w-6/12 px-4 mb-10">
            <a target="_blank" rel="me noopener noreferrer" href="https://www.udemy.com/course/intro-to-web-dev-no-experience/" class="block card rounded overflow-hidden">
              <img src="<?php echo get_theme_file_uri('/images/courses/udemy-free.jpg') ?>" alt="Udemy 網頁開發體驗課" class="w-full" />
              <div class="px-4 py-6 border-b-8 border-teal-600">
                <h3 class="mb-4 text-xl">
                  網頁開發體驗課
                </h3>
                <div class="flex justify-between">
                  <div class="flex items-center">
                    <?php get_template_part('template-parts/content', 'svg-user'); ?>
                    +600人
                  </div>

                  <div class="flex items-center">
                    <?php get_template_part('template-parts/content', 'svg-cart'); ?>
                    免費
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /card -->
          <!-- card -->
          <div class="w-full sm:w-6/12 px-4 mb-10">
            <a target="_blank" rel="me noopener noreferrer" href="https://www.youtube.com/user/kuanhsuh" class="block card rounded overflow-hidden">
              <img src="<?php echo get_theme_file_uri('/images/courses/bigboy-youtube.png') ?>" alt="Big Boy Youtube" class="w-full" />
              <div class="px-4 py-6 border-b-8 border-teal-600">
                <h3 class="mb-4 text-xl">
                  Big Boy Youtube
                </h3>
                <div class="flex justify-between">
                  <div class="flex items-center">
                    <?php get_template_part('template-parts/content', 'svg-user'); ?>
                    +5000人
                  </div>

                  <div class="flex items-center">
                    <?php get_template_part('template-parts/content', 'svg-cart'); ?>
                    免費
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /card -->
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
