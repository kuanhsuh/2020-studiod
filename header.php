<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package studiod
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico" type="image/x-icon">

  <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target=".navbar-default" data-offset="100" <?php body_class(); ?>>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'studiod'); ?></a>
    <div class="warpper clearfix">
      <!--sidebar menu-->
      <!-- Header -->
      <nav class="sticky top-0 bg-white shadow z-100 text-sm py-2 px-4 sm:px-0">
        <div class="container mx-auto md:px-0">
          <div class="flex flex-wrap justify-between items-center md:items-end">
            <a class="flex text-xl items-center" href="<?php echo home_url(); ?>">
              <?php get_template_part('template-parts/content', 'svg-logo'); ?>
              鎰誠數位
            </a>
            <ul class="hidden md:flex md:items-end md:w-auto">
              <li class="mr-2 px-2 text-gray-600 font-medium">
                <a href="<?php echo home_url(); ?>">首頁</a>
              </li>
              <li class="mr-2 px-2"><a href="<?php echo esc_html(site_url("/wordpress-website")) ?>">程式服務</a></li>
              <!-- <li class="mr-2 px-2"><a href="<? php // echo get_page_link(517); 
                                                  ?>">線上課程</a></li>
              <li class="mr-2 px-2"><a href="<? php // echo get_page_link(2); 
                                              ?>">作品</a></li> -->
              <li class="mr-2 px-2"><a href="<?php echo get_page_link(47); ?>">部落格</a></li>
              <li class="pl-2"><a href="<?php echo esc_html(site_url("/contact-info")) ?>">聯絡我們</a></li>
            </ul>
            <div class="flex items-center md:hidden">
              <a href="#" class="py-2 px-4 bg-teal-600 text-white rounded mr-2 ">
                <svg class="h-4 w-4 fill-current text-white inline-block mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M20 18.35V19a1 1 0 01-1 1h-2A17 17 0 010 3V1a1 1 0 011-1h4a1 1 0 011 1v4c0 .56-.31 1.31-.7 1.7L3.16 8.84c1.52 3.6 4.4 6.48 8 8l2.12-2.12c.4-.4 1.15-.71 1.7-.71H19a1 1 0 01.99 1v3.35z" />
                </svg>
                +886-952-823-328</a>
              <span onclick="toggleMenu()" class="block ">
                <div class="nav-bar"></div>
                <div class="nav-bar"></div>
                <div class="nav-bar"></div>
              </span>
            </div>
            <ul id="responsive" class="sidebar hidden w-1/2 shadow h-full text-center md:hidden bg-white fixed" style="z-index: 50; top: 0; right: 0">
              <li class="py-3 text-right pr-6">
                <span onclick="toggleMenu()" class="inline-block relative" style="width: 25px; height: 25px; margin-top: 15px;">
                  <div class="nav-cross absolute" style=""></div>
                  <div class="nav-cross-2 absolute top-0"></div>
                </span>
              </li>
              <li class="py-2 text-gray-600"><a href="#">首頁</a></li>
              <li class="py-2"><a href="<?php echo home_url(); ?>">公司介紹</a></li>
              <li class="py-2"><a href="<?php echo esc_html(site_url("/wordpress-website")) ?>">程式服務</a></li>
              <!-- <li class="py-2"><a href="<? php // echo get_page_link(517); 
                                              ?>">線上課程</a></li>
              <li class="py-2"><a href="<? php // echo get_page_link(2); 
                                        ?>">作品</a></li> -->
              <li class="py-2"><a href="<?php echo get_page_link(47); ?>">部落格</a></li>
              <li class="py-2"><a href="<?php echo esc_html(site_url("/contact-info")) ?>">聯絡我們</a></li>
            </ul>
          </div>
        </div>
      </nav>