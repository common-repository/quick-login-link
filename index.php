<?php
/*
   Plugin Name: Quick Login link (yoursite.com/login)
   Description: PLUGIN is deprecated!  Nowadays, everyone should protect "WP-ADMIN" link!!! Please, use plugin "iThemes security",its function to rename "WP-ADMIN" to anything you want!!! That will also increase security !! (P.S.  OTHER MUST-HAVE PLUGINS FOR EVERYONE: http://bitly.com/MWPLUGINS )
   contributors: tazotodua
   Version: 1.22
   LICENCE: Free
*/
if ( ! defined( 'ABSPATH' ) ) exit; //Exit if accessed directly
return;

$h= home_url('','relative');
if (in_array(strtolower($_SERVER['REQUEST_URI']), array( $h.'/admin', $h.'/login',  $h.'/l' ))){ echo '<script type="text/javascript">window.location = "'.admin_url('').'";</script>'; exit; }

?>
