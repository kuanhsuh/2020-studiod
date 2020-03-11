<?php
/* Template Name: All Classes Page */
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
          <!-- card -->
          <div class="w-full sm:w-6/12 px-4 mb-10">
            <a target="_blank" rel="me noopener noreferrer" href="https://hiskio.com/courses/293?promo_code=QE88WEL" class="block card rounded overflow-hidden">
              <img src="<?php echo get_theme_file_uri('/images/courses/hiskio-css.png') ?>" alt="hiskio-css-課程" class="w-full" />
              <div class="px-4 py-6 border-b-8 border-teal-600">
                <h3 class="mb-4 text-xl">
                  從零開始學CSS, HTML5, RWD網站
                </h3>
                <div class="flex justify-between">
                  <div class="flex items-center">
                    <?php get_template_part('template-parts/content', 'svg-user'); ?>
                    101人
                  </div>

                  <div class="flex items-center">
                    <?php get_template_part('template-parts/content', 'svg-cart'); ?>
                    NT$1,440
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /card -->
          <!-- card -->
          <div class="w-full sm:w-6/12 px-4 mb-10">
            <a target="_blank" rel="me noopener noreferrer" href="https://split.to/lEsmoCz" class="block card rounded overflow-hidden">
              <img src="<?php echo get_theme_file_uri('/images/courses/hiskio-js.png') ?>" alt="hiskio-css-課程" class="w-full" />
              <div class="px-4 py-6 border-b-8 border-teal-600">
                <h3 class="mb-4 text-xl">
                  JavaScript新手秘笈｜三大專案帶你輕鬆入門
                </h3>
                <div class="flex justify-between">
                  <div class="flex items-center">
                    <?php get_template_part('template-parts/content', 'svg-user'); ?>
                    198人
                  </div>

                  <div class="flex items-center">
                    <?php get_template_part('template-parts/content', 'svg-cart'); ?>
                    特價 NT$1290
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /card -->
          <!-- card -->
          <div class="w-full sm:w-6/12 px-4 mb-10">
            <a target="_blank" rel="me noopener noreferrer" href="https://hiskio.com/courses/290?promo_code=VE9O4G6" class="block card rounded overflow-hidden">
              <img src="<?php echo get_theme_file_uri('/images/courses/hiskio-freelance.png') ?>" alt="hiskio-css-課程" class="w-full" />
              <div class="px-4 py-6 border-b-8 border-teal-600">
                <h3 class="mb-4 text-xl">
                  工程師學接案
                </h3>
                <div class="flex justify-between">
                  <div class="flex items-center">
                    <?php get_template_part('template-parts/content', 'svg-user'); ?>
                    173人
                  </div>

                  <div class="flex items-center">
                    <?php get_template_part('template-parts/content', 'svg-cart'); ?>
                    特價 NT$990
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /card -->
          <!-- combo card -->
          <div class="w-full sm:w-6/12 px-4 mb-10">
            <a target="_blank" rel="me noopener noreferrer" href="https://hiskio.com/packages/WLydMvRQY" class="block card rounded overflow-hidden">
              <img src="<?php echo get_theme_file_uri('/images/courses/hiskio-js-css-freelance.png') ?>" alt="hiskio-css-課程" class="w-full" />
              <div class="px-4 py-6 border-b-8 border-yellow-500">
                <h3 class="mb-4 text-xl">
                  工程師學接案｜網頁接案新手基礎組合包 (JS+CSS+接案)
                </h3>
                <div class="flex justify-between">
                  <span class="text-yellow-500 border border-yellow-500 p-2">
                    組合包
                  </span>

                  <div class="flex items-center">
                    <?php get_template_part('template-parts/content', 'svg-cart'); ?>
                    特價 NT$3690
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /combo card -->
          <!-- combo card -->
          <div class="w-full sm:w-6/12 px-4 mb-10">
            <a target="_blank" rel="me noopener noreferrer" href="https://hiskio.com/packages/W1wV1jrzq" class="block card rounded overflow-hidden">
              <img src="<?php echo get_theme_file_uri('/images/courses/hiskio-js-css.png') ?>" alt="hiskio-css-課程" class="w-full" />
              <div class="px-4 py-6 border-b-8 border-yellow-500">
                <h3 class="mb-4 text-xl">
                  Javascript新手秘笈｜網頁基礎完整打底組合包 (JS+CSS)
                </h3>
                <div class="flex justify-between">
                  <span class="text-yellow-500 border border-yellow-500 p-2">
                    組合包
                  </span>

                  <div class="flex items-center">
                    <?php get_template_part('template-parts/content', 'svg-cart'); ?>
                    特價 NT$2690
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /combo card -->
          <!-- combo card -->
          <div class="w-full sm:w-6/12 px-4 mb-10">
            <a target="_blank" rel="me noopener noreferrer" href="https://hiskio.com/packages/ZXweKmRvz" class="block card rounded overflow-hidden">
              <img src="<?php echo get_theme_file_uri('/images/courses/hiskio-js-freelance.png') ?>" alt="hiskio-css-課程" class="w-full" />
              <div class="px-4 py-6 border-b-8 border-yellow-500">
                <h3 class="mb-4 text-xl">
                  工程師學接案｜Javascript基礎養成包 (JS+接案)
                </h3>
                <div class="flex justify-between">
                  <span class="text-yellow-500 border border-yellow-500 p-2">
                    組合包
                  </span>

                  <div class="flex items-center">
                    <?php get_template_part('template-parts/content', 'svg-cart'); ?>
                    特價 NT$2290
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- /combo card -->

        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
