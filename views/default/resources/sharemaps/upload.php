<?php
/**
 * Elgg sharemaps upload new maps
 *
 * @package ElggShareMaps
 */

elgg_load_library('elgg:sharemaps');

if (!sharemaps_is_type_active('map_upload')) { 
    register_error(elgg_echo('sharemaps:add:noaccessforpost'));  
    forward(REFERER);	
}

$owner = elgg_get_page_owner_entity();

gatekeeper();
group_gatekeeper();

$title = elgg_echo('sharemaps:add');

// set up breadcrumbs
elgg_push_breadcrumb(elgg_echo('sharemaps'), "sharemaps/all");
if (elgg_instanceof($owner, 'user')) {
	elgg_push_breadcrumb($owner->name, "sharemaps/owner/$owner->username");
} else {
	elgg_push_breadcrumb($owner->name, "sharemaps/group/$owner->guid/all");
}
elgg_push_breadcrumb($title);

// create form
$form_vars = array('enctype' => 'multipart/form-data');
$body_vars = sharemaps_prepare_form_vars();
$content = elgg_view_form('sharemaps/upload', $form_vars, $body_vars);

$body = elgg_view_layout('content', array(
	'content' => $content,
	'title' => $title,
	'filter' => '',
));

echo elgg_view_page($title, $body);
