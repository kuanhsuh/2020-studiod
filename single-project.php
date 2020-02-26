<?php
  /**
   * The template for displaying all single posts
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
   *
   * @package studiod
   */
$client_name = get_field('client_name');
$client_url = get_field('client_url');
$client_date = get_field('client_date');
$client_tag = get_field('client_tag');
  get_header();
  ?>
<?php
  while (have_posts()): the_post();?>

<!-- section title -->
<!-- Portfolio -->
<section id="projets" class="padd-80">
  <div class="container-page">
    <div class="row">
      <div class="single-portfolio-content col-lg-12">
      <?php
        if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail('full', array('class' => '', 'alt'	=> trim(strip_tags($post->post_title)),
            'title'	=> trim(strip_tags($post->post_title)))); // show featured image
        } ?>
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <h3><?php the_title(); ?></h3>
            <p>
            <?php the_content(); ?>
            </p>
            <?php get_template_part('template-parts/content', 'share'); ?>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="info-portfolio">
              <ul>
                <li class="clearfix">
                  <strong>Client</strong>
                  <span><?php echo $client_name; ?></span>
                </li>
                <li class="clearfix">
                  <strong>Date</strong>
                  <span><?php echo $client_date; ?></span>
                </li>
                <li class="clearfix">
                  <strong>Tags</strong>
                  <span><?php echo $client_tag; ?></span>
                </li>
                <li class="clearfix">
                  <strong>URL</strong>
                  <span>
                  <a rel="nofollow" href="<?php echo $client_url; ?>" target="_blank"><?php echo $client_url; ?></a>
                  </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile;?>
<!--related projects -->
<section class="related-projects ">
  <div class="container-page  padd-80 ">
    <div class="row">
      <div class="row-centered">
        <div class="col-centered col-lg-7">
          <h2 class="title-h2">相關作品</h2>
          <!-- <p class="font-p mg-tp-30 mg-bt-30">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
            ipsa quae ab
          </p> -->
        </div>
      </div>
      <?php
        //for use in the loop, list 5 post titles related to first tag on current post
        $args = array(
          'post_type' => array('project', 'optimization'),
          'posts_per_page' => 3,
          'orderby' => 'rand',
        );
      $my_query = new WP_Query($args);
      if ($my_query->have_posts()) {
          while ($my_query->have_posts()): $my_query->the_post(); ?>
      <div class=" col-lg-4  col-md-4">
        <div class="project_product">
          <div class="project-holder">
          <?php if (has_post_thumbnail()) {
              the_post_thumbnail('medium_large', array( 'class'  => 'img-responsive' ));
          } else {
              ?>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/portflio/3.jpg" class="img-responsive" alt="" title="">
            <?php
          } ?>
            <div class="text-holder">
              <div class="text-holder-outer">
                <div class="text-holder-inner">
                  <h4><?php the_title(); ?></h4>
                  <div class="icon-holder">
                    <a href="<?php bloginfo('template_directory'); ?>/assets/images/portflio/branding-3.jpg" class="modal-venobox project-link">
                    <i class=" icon_zoom-in_alt"></i>
                    </a>
                    <a href="<?php the_permalink()?>" class=" project-link">
                    <i class="icon_link_alt"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
        endwhile;
      }
      wp_reset_query();
        ?>
    </div>
  </div>
</section>
<?php
get_footer();
