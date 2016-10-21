<?php
/**
 * @package dutchdodo startertheme
 */
?>

<?php

	if ( $projects_list = ddd_get_projects() ) {
		echo '<ul class="media-list">';
		foreach( $projects_list as $project_list_item ) {

			echo '<li class="media">';
			echo 	'<div class="media-left test">';
						if($project_list_item->ddd_featured_image){
			echo 		'<img class="media-object" src="'.$project_list_item->ddd_featured_image.'" alt="image of project">';
						} else {
			echo 		'<img class="media-object with-placeholder" src="'. get_stylesheet_directory_uri() .'/dist/images/placeholder-thumbnail-150x150.png" alt="image">';
						}
			echo 	'</div>';
			echo 	'<div class="media-body">';
			echo 		'<h4 class="media-heading">'.$project_list_item->ddd_the_title.'</h4>';
			echo 		'<dl class="project-meta">';
			echo 			'<dt class="project-meta--jobrole">Jobrole</dt>';
			echo 			'<dd>'.$project_list_item->job_role.'</dd>';
			echo 			'<dt class="project-meta--clientname">Client</dt>';
			echo 			'<dd>'.$project_list_item->ddd_client_name.'</dd>';
							if( $project_list_item->ddd_url_link ){
			echo 			'<dt class="project-meta--url">Link</dt>';
							if( ! $project_list_item->ddd_url_link_text ) {
								$project_list_item->ddd_url_link_text = 'view online';
							}
			echo 			'<dd><a href="'.$project_list_item->ddd_url_link.'" alt="link to project">'.$project_list_item->ddd_url_link_text.'</a></dd>';
							}
			echo 		'</dl>';
			echo 	'</div>';
			echo '</li>';
		}
		echo '</ul>';

	} ?>
