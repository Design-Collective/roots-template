<?php
  global $woocommerce;
?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand visible-xs-block" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <?php //get_search_form(); ?>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <div class="navbar-center">
        <a class="navbar-logo visible-md-inline visible-lg-inline" href="<?php echo esc_url(home_url('/')); ?>">
          <span class="icon-bh-madeinla"></span>
        </a>
      </div>
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      <ul class="nav navbar-nav navbar-right">
        <li class="visible-md-block visible-lg-block"><?php get_search_form(); ?></li>
        <li><a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"> <?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> / <?php echo $woocommerce->cart->get_cart_total(); ?></a></li><!--
        --><li class="social-icon"><a href="https://facebook.com/BROKENHOMME"><i class="icon-facebook"></i></a></li><!--
        --><li class="social-icon"><a href="http://brokenhomme.tumblr.com"><i class="icon-tumblr"></i></a></li><!--
        --><li class="social-icon"><a href="http://vimeo.com"><i class="icon-vimeo"></i></a></li><!--
        --><li class="social-icon"><a href="http://instagram.com/brokenhomme"><i class="icon-instagram"></i></a></li>
      </ul>
    </nav>
  </div>
</header>
