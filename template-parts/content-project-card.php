<?php
/**
 * @package dutchdodo startertheme
 */
?>

<?php
	if ( $projects_list = ddd_get_projects() ) {
		echo 	'<div class="d_cards--tiled">';
		foreach( $projects_list as $project_list_item ) {

				echo '<div class="card text-xs-center">';
						if(	$project_list_item->ddd_featured_image ){
				echo 	'<img class="card-img-top img-fluid" src="'.$project_list_item->ddd_featured_image.'" alt="Card image cap">';
						}
				echo 	'<div class="card-block">';
				echo 		'<a target="_blank" href="'.$project_list_item->ddd_url_link.'" alt="link to project" class="fa fa-external-link pull-right"></a>';
				echo 		'<h4 class="card-title">'.$project_list_item->ddd_the_title.'</h4>';
				echo 		'<dl class="project-meta">';
				echo 			'<dt class="project-meta--jobrole">Jobrole</dt>';
				echo 			'<dd>'.$project_list_item->job_role.'</dd>';
				echo 			'<dt class="project-meta--clientname">Client</dt>';
				echo 			'<dd>'.$project_list_item->ddd_client_name.'</dd>';
								if( $project_list_item->ddd_url_link ){
				//echo 			'<dt class="project-meta--url" hidden>Link</dt>';
								if( ! $project_list_item->ddd_url_link_text ) {
									$project_list_item->ddd_url_link_text = 'view online';
								}
				//echo 			'<dd><a href="'.$project_list_item->ddd_url_link.'" alt="link to project">'.$project_list_item->ddd_url_link_text.'</a></dd>';
								}
				echo 		'</dl>';


				echo 	'</div>';
				echo '</div>';

		}
		echo 	'</div>';
	} ?>
