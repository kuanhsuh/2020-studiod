<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package studiod
 */

get_header();
?>
<!-- section title -->
<div class="section-title  blog-section-title padd-title">
  <div class="row-centered">
    <div class="col-centered col-lg-7">
      <h2 class="title-h2">搜尋結果🔍...</h2>
    </div>
  </div>
</div>
<?php
    global $query_string;
    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach ($query_args as $key => $string) {
        $query_split = explode("=", $string);
        $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach

    $the_query = new WP_Query($search_query);
    if ($the_query->have_posts()) :
    ?>
<!-- the loop -->

<!-- section title -->
<!--Blog Content -->
<section id="blog" class="padd-80">
  <div class="container-page">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <div class="blog-content">
          <!--Blog post -->
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                  <li><?php the_category(', '); ?></li>
                </ul>
              </div>
            </div>
          </div>
          <?php endwhile; ?>

        </div>
      </div>
      <?php get_template_part('content', 'sidebar'); ?>
    </div>
  </div>
</section>
<!-- end of the loop -->

<?php wp_reset_postdata(); ?>


<?php else : ?>
<section id="blog" class="padd-80">
  <div class="container-page">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <div class="blog-content">
          <h3><?php _e('目前找不到你要的內容... 請做別的查詢🤔🤔🤔'); ?></h3>
        </div>
      </div>
      <?php get_template_part('content', 'sidebar'); ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php
get_footer();