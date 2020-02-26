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
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.svg" alt="鎰誠數位-高雄Wordpress專家" class="w-8 h-8  mr-2">
              鎰誠數位
            </a>
            <ul class="hidden md:flex md:items-end md:w-auto">
              <li class="mr-2 px-2 text-gray-600 font-medium">
                <a href="<?php echo home_url(); ?>">首頁</a>
              </li>
              <li class="mr-2 px-2"><a href="<?php echo get_page_link(519); ?>">程式服務</a></li>
              <li class="mr-2 px-2"><a href="<?php echo get_page_link(517); ?>">線上課程</a></li>
              <li class="mr-2 px-2"><a href="<?php echo get_page_link(2); ?>">作品</a></li>
              <li class="mr-2 px-2"><a href="<?php echo get_page_link(47); ?>">部落格</a></li>
              <li class="pl-2"><a href="<?php echo get_page_link(44); ?>">聯絡我們</a></li>
            </ul>
            <span onclick="toggleMenu()" class="block md:hidden">
              <div class="nav-bar"></div>
              <div class="nav-bar"></div>
              <div class="nav-bar"></div>
            </span>
            <ul id="responsive" class="sidebar hidden w-1/2 shadow h-full text-center md:hidden bg-white fixed" style="z-index: 50; top: 0; right: 0">
              <li class="py-3 text-right pr-6">
                <span onclick="toggleMenu()" class="inline-block relative" style="width: 25px; height: 25px; margin-top: 15px;">
                  <div class="nav-cross absolute" style=""></div>
                  <div class="nav-cross-2 absolute top-0"></div>
                </span>
              </li>
              <li class="py-2 text-gray-600"><a href="#">首頁</a></li>
              <li class="py-2"><a href="<?php echo home_url(); ?>">公司介紹</a></li>
              <li class="py-2"><a href="<?php echo get_page_link(519); ?>">程式服務</a></li>
              <li class="py-2"><a href="<?php echo get_page_link(517); ?>">線上課程</a></li>
              <li class="py-2"><a href="<?php echo get_page_link(2); ?>">作品</a></li>
              <li class="py-2"><a href="<?php echo get_page_link(47); ?>">部落格</a></li>
              <li class="py-2"><a href="<?php echo get_page_link(44); ?>">聯絡我們</a></li>
            </ul>
          </div>
        </div>
      </nav>