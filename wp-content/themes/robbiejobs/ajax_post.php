<?php

DEFINE('WP_USE_THEMES', false);
require_once('../../../wp-load.php');

// Vars
$post = (isset($_GET['post'])) ? $_GET['post'] : 0;

$q = get_post($post);
if ($q) {
	echo $q->post_content;
}

wp_reset_query();