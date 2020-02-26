<?php
  get_header(); ?>
<!-- section title -->
<div class="section-title  blog-section-title padd-title">
  <div class="row-centered">
    <div class="col-centered col-lg-7">
      <h2 class="title-h2">🏷 標籤類別: <?php single_tag_title(); ?> </h2>
    </div>
  </div>
</div>
<!-- section title -->
<!--Blog Content -->
<section id="blog" class="padd-80">
  <div class="container-page">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <div class="blog-content">
          <!--Blog post -->
          <?php if (have_posts()) : ?>
          <?php /* Start the Loop */ ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="blog-item">
            <div class="blog-item-img">
              <a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) {
                ?>
                <?php the_post_thumbnail("", array( 'class'  => 'img-responsive' )); ?>
                <?php
            } else {
                ?>
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/blog4.jpg" alt="">
                <?php
            } ?></a>
              <span class="date"><?php echo get_the_date('F j, Y'); ?></span>
            </div>
            <div class="blog-summary">
              <h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
              <p>
                <?php echo get_the_excerpt(); ?>
                <a class="more-link" href="<?php the_permalink()?>">繼續閱讀 →</a>
              </p>
              <div class="blog-meta">
                <ul>
                  <li><?php echo get_the_date('F j, Y'); ?></li>
                  <li><?php the_author(); ?></li>
                  <li><?php incomplete_cat_list(', '); ?></li>
                </ul>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php else : ?>
          <?php get_template_part('content', 'none'); ?>
          <?php endif; ?>
        </div>
      </div>
      <?php get_template_part('content', 'sidebar'); ?>
    </div>
  </div>
</section>
<?php
get_footer();