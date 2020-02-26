<div class="sharebox clearfix">
  <ul class="d-flex align-items-center justify-content-center">
    <?php
        $URL = urlencode(get_permalink());
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$URL;
    ?>
    <li>
      <a href="<?php echo $facebookURL; ?>">
        <i class="social_facebook"></i>Facebook</a>
    </li>
    <!-- <li class="d-inline-flex align-items-center">
    <div class="line-it-button" data-lang="zh_Hant" data-type="share-b" data-url="https://media.line.me/zh_TW/how_to_install#lineitbutton" style="display: none;"></div>
      <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
      <span style="display: inline-block; margin-left: 5px; align-self: flex-end">Line</span>
    </li> -->
  </ul>
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d89852f161fe7ff"></script>

</div>