<?php
/**
 * @package dutchdodo startertheme
 */
?>

<?php
	if ( $education_list = ddd_get_education() ) {
		foreach( $education_list as $education_list_item ) {

		echo '<dl class="d_position d_timeline-event--education">';
			echo '<dt hidden>Organisation</dt>';
			echo '<dd class="d_position__name">'.$education_list_item->ddd_the_title.'</dd>';
			echo '<dt hidden>Function started</dt>';
			echo '<dd class="d_position__function-start">'.$education_list_item->ddd_start_date.'</dd>';
			echo '<dt hidden>Function until</dt>';
			if (! $education_list_item->ddd_end_date ){
				$education_list_item->ddd_end_date = 'Active';
			}
			echo '<dd class="d_position__function-end">'.$education_list_item->ddd_end_date.'</dd>';
			echo '<dt hidden>Function</dt>';
			echo '<dd class="d_position__function">'.$education_list_item->ddd_course_name.'</dd>';
			if ( $education_list_item->ddd_the_content ){
			echo '<dt hidden>Function description</dt>';
			echo '<dd class="d_position__description">';
				echo '<p>';
				echo $education_list_item->ddd_the_content;
				echo '</p>';
			echo '</dd>';
			}
		echo '</dl>';
		}
	} ?>
