<?php
/* Template Name: Portfolio Page */
get_header();?>
  <!-- section title -->
  <div class="section-title  portflio-section-title padd-title">
      <div class="row-centered">
        <div class="col-centered col-lg-7">
          <h2 class="title-h2">作品集
          </h2>
          <p class="font-p">
            Talk is cheap. Show me the code. – Linus Torvalds
          </p>
        </div>
      </div>
    </div>
    <!-- section title -->
    <!-- portfolio -->
    <section id="projets" class="padd-80">
      <div class="container-page">
        <div class="row-centered mag-left">
          <div class="col-centered col-lg-12">
            <div class="project-holder two-columns-porfolios">
              <!--Filter-->
              <div class="filter-tab mg-bt-60">
                <button class="btn filter-btn active" data-filter="all">所有</button>
                <button class="btn filter-btn" data-filter="Web-design">網頁設計</button>
                <!-- <button class="btn  filter-btn" data-filter="system">網站系統</button> -->
                <button class="btn filter-btn" data-filter="optimization">網站SEO優化</button>
                <!-- <button class="btn  filter-btn" data-filter="marketing">數位媒體行銷</button> -->
              </div>
              <!--Filter-->
              <div class="projetc-inner">
                <div class="row">
                  <!-- WEB DESIGN -->
                  <?php $loop = new WP_Query(array('post_type' => 'project', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '4'));?>
                  <?php while ($loop->have_posts()): $loop->the_post();?>
                  <div class="col-lg-6 col-md-6 filter all Web-design other">
                    <!-- <div class="filter all Web-design other"> -->
                      <div class="project_product-two-columns">
                        <div class="project-holder">
                          <a href="<?php the_permalink();?>">
                            <?php
                              if (has_post_thumbnail()) {
                                  the_post_thumbnail('full', array('class' => 'img-responsive', 'alt'	=> trim(strip_tags($post->post_title)),
                                  'title'	=> trim(strip_tags($post->post_title))));
                              } ?>
                            <div class="project_product-two-columns-holder">
                              <div class="project_product-two-columns-text">
                                <h4><?php the_title();?></h4>
                                <span><?php echo get_field('client_tag'); ?></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    <!-- </div> -->
                  </div>

                  <?php endwhile;
                  wp_reset_query();?>

                  <!-- System -->
                  <!-- <?//php $loop = new WP_Query(array('post_type' => 'system', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '4'));?>
                  <?//php while ($loop->have_posts()): $loop->the_post();?>
                  <div class=" col-lg-6 col-md-6">
                    <div class="filter all system other">
                      <div class="project_product-two-columns">
                        <div class="project-holder">
                          <a href="<?//php the_permalink();?>">
                            <img src="<?//php bloginfo('template_directory');?>/assets/images/portflio/3.jpg" class="img-responsive" alt="" title="">
                            <div class="project_product-two-columns-holder">
                              <div class="project_product-two-columns-text">
                                <h4><?//php the_title();?></h4>
                                <span>asdfasdfBranding</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <?//php endwhile;
                  //wp_reset_query();?> -->

                  <!-- Optimzation -->
                  <?php $loop = new WP_Query(array('post_type' => 'optimization', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '4'));?>
                  <?php while ($loop->have_posts()): $loop->the_post();?>
                  <div class="col-lg-6 col-md-6 filter all optimization other">
                    <!-- <div class="filter all optimization other"> -->
                      <div class="project_product-two-columns">
                        <div class="project-holder">
                          <a href="<?php the_permalink();?>">
                          <?php
                              if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
                                  the_post_thumbnail('full', array('class' => 'img-responsive', 'alt'	=> trim(strip_tags($post->post_title)),
                                  'title'	=> trim(strip_tags($post->post_title)))); // show featured image
                              } ?>
                            <div class="project_product-two-columns-holder">
                              <div class="project_product-two-columns-text">
                                <h4><?php the_title();?></h4>
                                <span>optimization</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    <!-- </div> -->
                  </div>

                  <?php endwhile;
                  wp_reset_query();?>
                  <!-- Marketing -->
                  <!-- <?//php $loop = new WP_Query(array('post_type' => 'marketing', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '4'));?>
                  <?//php while ($loop->have_posts()): $loop->the_post();?>
                  <div class=" col-lg-6 col-md-6">
                    <div class="filter all marketing other">
                      <div class="project_product-two-columns">
                        <div class="project-holder">
                          <a href="<?//php the_permalink();?>">
                            <img src="<?//php bloginfo('template_directory');?>/assets/images/portflio/3.jpg" class="img-responsive" alt="" title="">
                            <div class="project_product-two-columns-holder">
                              <div class="project_product-two-columns-text">
                                <h4><?//php the_title();?></h4>
                                <span>Marketing</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <?//php endwhile;
                  //wp_reset_query();?> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
get_footer();
