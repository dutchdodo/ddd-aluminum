<?php
/**
 * @package dutchdodo startertheme
 */
?>

<?php
	if ( $positions_list = ddd_get_positions() ) {
		foreach( $positions_list as $positions_list_item ) {

		echo '<dl class="d_position d_timeline-event--position">';
			echo '<dt hidden>Organisation</dt>';
			echo '<dd class="d_position__name">'.$positions_list_item->ddd_the_title.'</dd>';
			echo '<dt hidden>Function started</dt>';
			echo '<dd class="d_position__function-start">'.$positions_list_item->ddd_start_date.'</dd>';
			echo '<dt hidden>Function until</dt>';
			if (! $positions_list_item->ddd_end_date ){
				$positions_list_item->ddd_end_date = 'Current';
			}
			echo '<dd class="d_position__function-end">'.$positions_list_item->ddd_end_date.'</dd>';
			echo '<dt hidden>Function</dt>';
			echo '<dd class="d_position__function">'.$positions_list_item->ddd_function_name.'</dd>';
			if ( $positions_list_item->ddd_the_content ){
			echo '<dt hidden>Function description</dt>';
			echo '<dd class="d_position__description">';
				echo '<p>';
				echo $positions_list_item->ddd_the_content;
				echo '</p>';
			echo '</dd>';
			}
		echo '</dl>';
		}
	} ?>
