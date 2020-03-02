<?php
/* Template Name: Portfolio Page */
get_header(); ?>
<?php
while (have_posts()) : the_post(); ?>
  <!-- section title -->
  <header class="py-8 bg-teal-800 text-white">
    <div class="container mx-auto">
      <h1 class="page-heading mb-6">作品</h1>
      <p class="font-hairline text-xl">高雄最專業的程式團隊，後端開發，UI/UX設計，前端開發</p>
    </div>
  </header>

  <section class="py-0 sm:py-16 ">
    <div class="container px-3 mx-auto">
      <div class="flex flex-wrap -mx-3 sm:-mx-8">
        <div class="w-full sm:w-3/12 px-0 sm:px-8">
          <?php get_template_part('template-parts/content', 'portfolio-sidebar'); ?>
        </div>
        <div class="w-full sm:w-9/12 px-3 sm:px-8 mt-4 sm:mt-0">
          <h2 class="section-heading block sm:hidden mb-4"><?php the_title(); ?></h2>
          <div class="flex flex-wrap -mx-3 sm:-mx-4">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $loop = new WP_Query(array(
              'post_type' => 'project',
              'orderby' => 'post_id',
              'order' => 'ASC',
              'posts_per_page' => '4',
              'paged' => $paged
            )); ?>

            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
              <!-- card -->
              <div class="w-full sm:w-6/12 px-4 mb-10">
                <a href="<?php the_permalink(); ?>" class="block card rounded overflow-hidden">
                  <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('full', array(
                      'class' => 'w-full', 'alt'  => trim(strip_tags($post->post_title)),
                      'title'  => trim(strip_tags($post->post_title))
                    ));
                  } ?>
                  <div class="px-4 py-6 border-b-8 border-teal-600">
                    <h3 class="mb-4 text-xl">
                      <?php the_title(); ?>
                    </h3>
                    <div class="flex justify-between">
                      <div class="flex items-center">
                        <span><?php echo get_field('client_tag'); ?></span>
                      </div>

                    </div>
                  </div>
                </a>
              </div>
              <!-- /card -->
              <!-- </div> -->
            <?php endwhile;
            wp_reset_query(); ?>
            <?php wp_pagenavi(array('query' => $loop)); ?>

          </div>

        </div>
      </div>
    </div>
    </div>
  </section>
<?php endwhile; ?>
<?php
get_footer();
