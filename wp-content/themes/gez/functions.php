<?php

function the_slug() {
    $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name'];
    return $slug; 
}

function custom_field($field, $post_id) {
	$cf = get_post_custom_values($field, $post_id);

	if (count($cf) > 1) {
		return $cf;
	}
	else {
		return array_shift($cf);
	}
}

register_nav_menu('nav-works', 'Works');