<form method="get" class="navbar-form navbar-left" action="<?php echo esc_url(home_url('/')); ?>" role="search">
  <i class="fa fa-search"></i> <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="form-control" placeholder="<?php _e('Search', 'roots'); ?>">
  <input type="hidden" id="searchsubmit" /> 
</form>