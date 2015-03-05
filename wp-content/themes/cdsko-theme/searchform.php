<?php 
/**
 * This is the searhc form
 * @package WordPress
 */
?>
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<h6 class="MenuInterno-heading hidden-xs"><span class="glyphicon glyphicon-option-vertical hidden-sm"></span>Buscar</h6>
	<div>
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Buscar" />
		<input type="submit" id="searchsubmit" class="MoreBtn" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
	</div>
</form>