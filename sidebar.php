<?php
if ( !defined( 'ABSPATH' ) ) :
 exit; // Exit if accessed directly
endif;

/**
* The sidebar containing the error widget area.
*
*
*@link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
*@package TierOne
*/


if ( ! is_active_sidebar('tierone_delta_sidebar') ){
	return;
}

?>
<div class="delta-sidebar">
	<?php dynamic_sidebar( 'tierone_delta_sidebar' );?>
</div>