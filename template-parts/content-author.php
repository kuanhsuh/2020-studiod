<div class="pt-4 flex flex-wrap">
  <?php echo get_avatar(get_the_author_meta('ID'), 120, '', '', array('class' => 'rounded bg-teal-600 w-16 h-16 mr-auto')); ?>
  <div class="mt-4 sm:mt-0" style="flex-basis: 88%;">
    <h4 class="font-medium">關於作者:<?php echo get_the_author_meta("display_name");  ?></h4>
    <p class="font-hairline mt-2">
      <?php echo get_the_author_meta("description"); ?></p>
  </div>
</div>