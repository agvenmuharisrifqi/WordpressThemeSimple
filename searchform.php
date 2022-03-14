<?php

/**
 * Custom Search Form
 * 
 */

$killuasimple_unique_id = wp_unique_id( 'search-form-' );
$killuasimple_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
// Backward compatibility, in case a child theme template uses a `label` argument.
if ( empty( $killuasimple_aria_label ) && ! empty( $args['label'] ) ) {
	$killuasimple_aria_label = 'aria-label="' . esc_attr( $args['label'] ) . '"';
}

?>
<form role="search" <?php echo $killuasimple_aria_label; ?> class="form-search" method="GET" action="<?php echo esc_url(home_url('/')); ?>">
    <input class="form-input" type="search" placeholder="Search Here" value="<?php echo get_search_query(); ?>" name="s"/>
    <button class="btn-search" type="submit">
        <i class='btn icon-search bx bx-search-alt'></i>
    </button>
</form>