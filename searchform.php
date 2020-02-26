<form class="search-form clearfix" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <input type="text" id="s" name="s" placeholder="Search our blog" value="<?php echo get_search_query(); ?>" required>
  <button type="submit">
      <i class="icon_search"></i>
  </button>
</form>