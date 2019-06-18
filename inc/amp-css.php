<?php

function add_amp_custom_font() { ?>
	<!-- print here your google font link (<link rel="....) -->
<?php }

function add_amp_boilerplate() { ?>
	<!-- this is AMP style boilerplate. Don't remove -->
	<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<?php }


function add_custom_amp_css() { ?>
	<style amp-custom>/*your custome style goes here */</style>
<?php }


/*
 * Add all custom function in head section
 */
add_action( 'wp_head', 'add_amp_custom_font', 79 );
add_action( 'wp_head', 'add_amp_boilerplate', 80 );
add_action( 'wp_head', 'add_custom_amp_css', 99 );
