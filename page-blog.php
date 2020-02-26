<?php
/* Template Name: Blog Page */
get_header(); ?>
<!-- section title -->
<header class="py-8 bg-teal-800 text-white">
  <div class="container mx-auto">
    <h1 class="page-heading mb-6">部落格</h1>
    <p class="font-hairline text-xl">這裡有一些SEO，網頁優化，程式教學文章 </p>
  </div>
</header>


<section class="py-0 sm:py-16 mt-4 sm:mt-0">
  <div class="container px-3 mx-auto">
    <div class="flex flex-wrap -mx-3 sm:-mx-8">
      <div class="w-full sm:w-8/12 px-4 sm:px-8">
        <!--Blog post -->
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $catquery = new WP_Query(array(
          'cat=1',
          'posts_per_page' => 4,
          'paged'         => $paged,
        ));
        ?>
        <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
          <article>
            <a href="<?php the_permalink(); ?>" class="block">
              <div class="relative">
                <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail("", array('class'  => 'h-64 w-full rounded object-cover object-center')); ?>
                <?php } ?>
                <div class="article-date">
                  <?php echo get_the_date('F j, Y'); ?>
                </div>
              </div>
              <h3 class="my-2 text-teal-500 section-heading tracking-wider"><?php the_title(); ?></h3>
              <p class="font-hairline"> <?php echo get_the_excerpt(); ?>
                <a class="text-teal-800 text-sm" href="<?php the_permalink() ?>">繼續閱讀 →</a></p>
              <ul class="mt-5 flex font-normal text-sm text-gray-600">
                <li><?php echo get_the_date('F j, Y'); ?></li><span class="mx-2">|</span>
                <li><?php the_author(); ?></li><span class="mx-2">|</span>
                <li class="text-teal-500"><?php incomplete_cat_list(', '); ?></li>
              </ul>
              <hr class="border-b-0 border-gray-300 my-12">
            </a>
          </article>
        <?php endwhile; ?>
        <?php wp_pagenavi(array('query' => $catquery)); ?>
      </div>
      <div class="w-full sm:w-4/12 px-8">
        <?php get_template_part('template-parts/content', 'blog-sidebar'); ?>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
