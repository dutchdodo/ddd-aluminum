<?php
/**
 * @package dutchdodo startertheme
 */
?>

	<?php
		if ( $keyword_list = ddd_get_keywords() ) {
			foreach( $keyword_list as $keyword_list_item ) {
				echo 	'<span class="tag tag-default">'.$keyword_list_item->ddd_the_title.'</span>';
			}
		}
	?>
