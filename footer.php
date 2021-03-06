<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package studiod
 */

?>


<footer class="bg-teal-800 py-8 sm:py-16">
  <div class="container mx-auto">
    <div class="flex flex-wrap mx-0 px-3 sm:-mx-6">
      <div class="w-full sm:w-4/12 px-8 sm:px-6">
        <h3 class="text-gray-300 text-xl font-normal mb-6">鎰誠數位</h3>
        <p class="text-gray-500">我們擁有網頁工程師的背景，對於程式品質具有極高的自我要求。在電子商務及數位行銷上更有著豐富的經驗。</p>
        <ul class="mt-6 flex">
          <li>
            <!-- Youtube -->
            <a target="_blank" rel="me noopener noreferrer" href="https://www.youtube.com/user/kuanhsuh">
              <svg class="h-10 w-10 fill-current text-teal-300 inline-block mr-2" viewBox="0 -61 512 512" xmlns="http://www.w3.org/2000/svg">
                <path d="M437 0H75C33.602 0 0 33.602 0 75v240c0 41.398 33.602 75 75 75h362c41.398 0 75-33.602 75-75V75c0-41.398-33.602-75-75-75zm0 0" fill="#ff3939" />
                <path d="M512 75v240c0 41.398-33.602 75-75 75H256V0h181c41.398 0 75 33.602 75 75zm0 0" fill="#c90232" />
                <path d="M256 136.2l-75-41.7v204l75-43.2 105.602-60.6zm0 0" fill="#ececf1" />
                <path d="M361.602 194.7L256 255.3V136.2zm0 0" fill="#e2e2e7" />
              </svg>
            </a>
          </li>
          <li>
            <!-- FB -->
            <a target="_blank" rel="me noopener noreferrer" href="https://www.facebook.com/bigboycancode/">
              <svg class="h-10 w-10 inline-block mr-2" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                <path d="M497 512H15c-8.284 0-15-6.716-15-15V15C0 6.716 6.716 0 15 0h482c8.284 0 15 6.716 15 15v482c0 8.284-6.716 15-15 15z" fill="#3a559f" />
                <path d="M497 0H256v512h241c8.284 0 15-6.716 15-15V15c0-8.284-6.716-15-15-15z" fill="#23448e" />
                <path d="M280.681 205.261v-19.248c0-43.534 13.761-42.284 55.081-42.284h1.974c5.523 0 10-4.477 10-10V85.325c0-5.5-4.5-10-10-10h-46.855c-44.753 0-81.37 36.616-81.37 81.37v19.007h-.149v29.559h-35.237c-5.523 0-10 4.477-10 10v46.755c0 5.523 4.477 10 10 10h35.237v154.658c0 5.523 4.477 10 10 10h51.249c5.523 0 10-4.477 10-10V272.017h47.263c5.523 0 10-4.477 10-10l10-46.755c0-5.523-4.477-10-10-10h-57.193z" fill="#fff" />
                <path d="M337.874 205.261h-57.193v-19.248c0-43.534 13.761-42.284 55.081-42.284h1.974c5.523 0 10-4.477 10-10V85.325c0-5.5-4.5-10-10-10h-46.855A80.606 80.606 0 00256 83.238v353.437h14.612c5.523 0 10-4.477 10-10V272.017h47.263c5.523 0 10-4.477 10-10l10-46.755c-.001-5.524-4.478-10.001-10.001-10.001z" fill="#d7f2f9" />
              </svg>
            </a>

          </li>
          <li>
            <a target="_blank" rel="me noopener noreferrer" href="https://line.me/ti/p/QlwtgbbMMS">
              <svg class="h-10 w-10 inline-block mr-2" viewBox="0 -11 512 512" xmlns="http://www.w3.org/2000/svg">
                <path d="M435.863 60.645C387.683 21.535 323.805 0 256 0S124.32 21.535 76.137 60.645C27.039 100.488 0 153.746 0 210.602c0 53.503 24.348 104.472 68.555 143.515 39.937 35.27 92.96 58.04 150.535 64.875v55.856c0 8.285 6.715 15 15 15 25.945 0 96.18-31.84 155.476-77.528 35.422-27.293 63.809-56.601 84.368-87.12C499.19 287.71 512 249.151 512 210.601c0-56.856-27.04-110.114-76.137-149.957zm0 0" fill="#54e360" />
                <path d="M435.863 60.645C387.683 21.535 323.805 0 256 0v485.73c33.285-9.988 86.82-37.394 133.566-73.41 35.422-27.293 63.809-56.601 84.368-87.12C499.19 287.71 512 249.151 512 210.601c0-56.856-27.04-110.114-76.137-149.957zm0 0" fill="#1fbf66" />
                <g fill="#e7f0ef">
                  <path d="M164.555 246.516h-34.703v-88.211c0-6.54-6.008-10.93-14.946-10.93s-14.945 4.39-14.945 10.93v104.437c0 6.426 5.746 11.086 13.66 11.086h50.934c6.238 0 10.765-5.742 10.765-13.656 0-8.043-4.425-13.656-10.765-13.656zm0 0M197.668 147.375c-8.938 0-14.941 4.39-14.941 10.93v104.437c0 6.528 6.144 11.086 14.941 11.086 8.66 0 14.941-4.66 14.941-11.086V158.305c0-6.54-6.004-10.93-14.941-10.93zm0 0M299.871 147.375c-8.937 0-14.941 4.39-14.941 10.93v46.097l-22.528-43.535c-5.5-10.469-9.89-13.492-19.566-13.492-8.941 0-14.945 4.457-14.945 11.09v104.277c0 6.528 6.144 11.086 14.945 11.086 8.656 0 14.941-4.66 14.941-11.086v-46.637l26.102 48.801c3.246 5.922 8.629 8.922 15.996 8.922 8.656 0 14.941-4.66 14.941-11.086V158.305c0-6.54-6.003-10.93-14.945-10.93zm0 0" />
                </g>
                <path d="M400.95 246.516h-40.97v-23.297h19.922c7.203 0 11.086-6.457 11.086-12.535 0-7.329-4.765-12.856-11.086-12.856H359.98v-23.133h40.97c6.429 0 11.09-5.812 11.09-13.82 0-7.82-4.661-13.5-11.09-13.5h-57.2c-7.914 0-13.656 4.664-13.656 11.09v104.277c0 6.426 5.742 11.086 13.656 11.086h57.2c6.429 0 11.09-5.676 11.09-13.5 0-8.004-4.661-13.812-11.09-13.812zm0 0M299.871 147.375c-8.937 0-14.941 4.39-14.941 10.93v46.097l-22.528-43.535c-2.172-4.14-4.18-7.101-6.402-9.183V268.23a9.295 9.295 0 001.777-5.488v-46.637l26.102 48.801c3.246 5.922 8.629 8.922 15.996 8.922 8.656 0 14.941-4.66 14.941-11.086V158.305c0-6.54-6.003-10.93-14.945-10.93zm0 0" fill="#c5e1e6" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
      <div class="w-full sm:w-4/12 px-8 sm:px-6 mt-8 sm:mt-0">
        <h3 class="text-gray-300 text-xl font-normal mb-6">導覽列</h3>
        <ul class="text-gray-500 font-normal">
          <li class="mb-2"><a href="<?php echo esc_html(site_url("/")) ?>">首頁</a></li>
          <li class="mb-2"><a href="<?php echo esc_html(site_url("/all-courses")) ?>">線上課程</a></li>
          <li class="mb-2"><a href="<?php echo esc_html(site_url("/contact-info")) ?>">程式服務</a></li>
          <li class="mb-2"><a href="<?php echo esc_html(site_url("/portfolio")) ?>">作品</a></li>
          <li class="mb-2"><a href="<?php echo esc_html(site_url("/wordpress-website")) ?>">部落格</a></li>
          <li><a href="<?php echo esc_html(site_url("/contact-info")) ?>">聯絡我們</a></li>
        </ul>
      </div>
      <div class="w-full sm:w-4/12 px-8 sm:px-6 mt-8 sm:mt-0">
        <h3 class="text-gray-300 text-xl font-normal mb-6">聯絡我們</h3>
        <ul class="text-gray-500 font-normal">
          <li class="mb-4 flex items-center">
            <svg class="h-5 w-5 fill-current text-teal-300 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M10 20S3 10.87 3 7a7 7 0 1114 0c0 3.87-7 13-7 13zm0-11a2 2 0 100-4 2 2 0 000 4z" />
            </svg>
            高雄市三民區壽昌路197號12F</li>
          <li class="mb-4 flex items-center">
            <svg class="h-5 w-5 fill-current text-teal-300 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M20 18.35V19a1 1 0 01-1 1h-2A17 17 0 010 3V1a1 1 0 011-1h4a1 1 0 011 1v4c0 .56-.31 1.31-.7 1.7L3.16 8.84c1.52 3.6 4.4 6.48 8 8l2.12-2.12c.4-.4 1.15-.71 1.7-.71H19a1 1 0 01.99 1v3.35z" />
            </svg>
            0952-823-328</li>
          <li class="mb-4 flex items-end">
            <svg class="h-5 w-5 fill-current text-teal-300 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M18 2a2 2 0 012 2v12a2 2 0 01-2 2H2a2 2 0 01-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z" />
            </svg>
            bigboycancode@gmail.com</li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<div class="bg-teal-900 py-2">
  <h6 class="text-center text-teal-600 text-sm">2018 © Copyright 鎰誠 All rights Reserved.</h6>
</div>
<script>
  function toggleMenu() {
    var navMenu = document.querySelector("#responsive");
    navMenu.classList.toggle("hidden");
  }
</script>

<?php wp_footer(); ?>

</body>

</html>