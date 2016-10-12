<?php
/**
 * @package dutchdodo startertheme
 */
?>

<?php

	if ( $projects_list = ddd_get_projects() ) {
		echo '<div class="card-deck-wrapper">';
  		echo 	'<div class="card-deck">';
		foreach( $projects_list as $project_list_item ) {

				echo '<div class="card">';
						if(	$project_list_item->ddd_featured_image ){
				echo 	'<img class="card-img-top" src="'.$project_list_item->ddd_featured_image.'" alt="Card image cap">';
						}
				echo 	'<div class="card-block">';
				echo 		'<h4 class="card-title">'.$project_list_item->ddd_the_title.'</h4>';
				echo 		'<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>';
				echo 	'</div>';
				echo '</div>';

		}
		echo 	'</div>';
		echo '</div>';

	} ?>
