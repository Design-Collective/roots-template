<?php

if (!is_admin() && !current_user_can( 'manage_options' )) {
  show_admin_bar( false );
}