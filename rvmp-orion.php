<?php
/*
Plugin Name: RVMPlayer Orion
Plugin URI: https://github.com/orionmsx/rvmp-orion/
Description: Añade el player de RVM en tu Wordpress
Version: 0.2
Author: Orion
Author URI: https://orionmsx.com/
License: BSD 3-Clause License
*/

add_action( 'wp_head', 'rvmp_add_script' );

function rvmp_add_script() {
  ?>
  <script src='https://cdn.rvmplayer.org/rvmplayer.cpc6128.min.js'></script>
  <script src='https://cdn.rvmplayer.org/rvmplayer.plus3.min.js'></script>
  <?php
}

require_once plugin_dir_path(__FILE__) . 'includes/rvmp-functions.php';
