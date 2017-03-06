<?php
/**
 * @package dutchdodo startertheme
 */
?>


<?php
	if ( $skillboard_list = ddd_get_tools() ) {
		echo 	'<div class="d_home-skillboard__content">';
		foreach( $skillboard_list as $skillboard_list_item ) {
		echo 		'<div class="d_progressbar">';
		echo 			'<div class="d_progressbar__label">'.$skillboard_list_item->ddd_the_title.'</div>';
		echo 			'<div class="d_progressbar__scale">';
		echo 				'<div class="d_progressbar__score"><span hidden>'.$skillboard_list_item->ddd_tools_score.'</span></div>';
		echo 			'</div>';
		echo 		'</div>';
		}
		echo 	'</div>';
	}
?>
