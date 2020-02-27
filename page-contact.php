<?php
/* Template Name: Contact Page */
get_header(); ?>
<?php
while (have_posts()) : the_post(); ?>
  <header class="px-0 sm:px-0 py-8 bg-teal-600 text-white">
    <div class="container mx-auto">
      <h1 class="page-heading mb-6 flex items-center">聯絡我們
        <svg class="h-12 w-12 ml-4 mt-1" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg">
          <g fill="none" fill-rule="evenodd">
            <g fill-rule="nonzero">
              <path d="M55.72 43h-1.17l2.52-24.57a3.991 3.991 0 00-3.33-4.38l.33-1.32A3 3 0 0051.16 9H50l.9-2.26A2 2 0 0049.05 4H47.4l.5-1.26A2 2 0 0046.05 0h-34.1a2 2 0 00-1.85 2.74L10.6 4H8.95A2 2 0 007.1 6.74L8 9H6.84a3 3 0 00-2.91 3.73L4.25 14a4.01 4.01 0 00-4.23 4.43L2.55 43h-.27A2 2 0 00.3 45.26C.919 49.891.583 47.373 2 58h54c1.424-10.682 1.093-8.2 1.7-12.74A2 2 0 0055.72 43z" fill="#9fc9d3" />
              <path d="M57.7 45.26L57.2 49H.8l-.5-3.74A2 2 0 012.28 43h53.44a2 2 0 011.98 2.26z" fill="#f9eab0" />
              <path d="M57.2 49L56 58H2L.8 49z" fill="#f0c419" />
              <path d="M55 49l-1.106 9H4.106L3 49z" fill="#f3d55b" />
              <path d="M54.07 12.73l-.33 1.32c-.54-.078 2.852-.05-49.49-.05l-.32-1.27A3 3 0 016.84 9h44.32a3 3 0 012.91 3.73z" fill="#84b5cb" />
              <path d="M50.9 6.74L50 9H8l-.9-2.26A2 2 0 018.95 4h40.1a2 2 0 011.85 2.74z" fill="#3b97d3" />
              <path d="M47.9 2.74L47.4 4H10.6l-.5-1.26A2 2 0 0111.95 0h34.1a2 2 0 011.85 2.74z" fill="#2980ba" />
              <path d="M8 43L6.189 22.173A2 2 0 018.181 20H25a2 2 0 012 2v21z" fill="#547580" />
              <path d="M51.18 25H33a1 1 0 01-1-1v-3a1 1 0 011-1h18.78a1 1 0 01.981 1.2l-.6 3a1 1 0 01-.981.8z" fill="#3f5c6c" />
              <path d="M34 31h-2a1 1 0 010-2h2a1 1 0 010 2zM51 31H38a1 1 0 010-2h13a1 1 0 010 2zM42 36H32a1 1 0 010-2h10a1 1 0 010 2zM50 36h-4a1 1 0 010-2h4a1 1 0 010 2z" fill="#ecf0f1" />
            </g>
            <path d="M10.055 43l-.04-.352a2.285 2.285 0 011.192-2.3c.071-.042.922-.581 2.941-1.859.584-.312.921-.947.852-1.606l-.175-1.568a7 7 0 01-2.058-2.648c-.136-.347-.057-.239-.363-.456-.39-.279-.328-.508-.5-2.065-.03-.267.248-.518.393-.686l-.262-2.335C12.021 26.72 12.1 24 15.9 24c3.776 0 4.482 2.688 4.568 3.1l.264 2.357c.389.357.522.47.546.685.169 1.509.3 1.779-.041 2.065-.257.217-.2.109-.26.456a5.18 5.18 0 01-1.466 2.648l.176 1.568c.109.694.551 1.29 1.184 1.594.04.022 3.368 1.866 3.41 1.886a2.965 2.965 0 011.679 2.285L26 43z" fill="#35495e" />
          </g>
        </svg>
      </h1>
      <p class="font-hairline text-xl">這裡有一些SEO，網頁優化，程式教學文章 </p>
    </div>
  </header>


  <section class="py-0 sm:py-16">
    <div class="container px-3 mx-auto">
      <div class="flex flex-wrap -mx-3 sm:-mx-8">
        <div class="w-full sm:w-3/12 px-0 sm:px-8">
          <?php get_template_part('template-parts/content', 'contact-sidebar'); ?>
        </div> <!-- w-3/12 -->
        <div class="w-full sm:w-9/12 px-0 sm:px-8">
          <?php the_content(); ?>
        </div> <!-- w-9/12 -->
      </div>
    </div>
  </section>
<?php endwhile; ?>
<?php
get_footer();
