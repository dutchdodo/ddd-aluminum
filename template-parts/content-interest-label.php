<?php
/**
 * @package dutchdodo startertheme
 */
?>

	<?php
		if ( $interests_list = ddd_get_interests() ) {
			foreach( $interests_list as $interests_list_item ) {
				echo 	'<span class="tag tag-default">'.$interests_list_item->ddd_the_title.'</span>';
			}
		}
	?>
