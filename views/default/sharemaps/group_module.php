<?php
/**
 * Group map module
 */

elgg_load_library('elgg:sharemaps');
$group = elgg_get_page_owner_entity();

if ($group->sharemaps_enable == "no") {
	return true;
}

$all_link = elgg_view('output/url', array(
	'href' => "sharemaps/group/$group->guid/all",
	'text' => elgg_echo('link:view:all'),
	'is_trusted' => true,
));

elgg_push_context('widgets');
$options = array(
	'type' => 'object',
	'subtypes' => array('sharemaps', 'drawmap'),
	'container_guid' => elgg_get_page_owner_guid(),
	'limit' => 6,
	'full_view' => false,
	'pagination' => false,
);
$content = elgg_list_entities($options);
elgg_pop_context();

if (!$content) {
	$content = '<p>' . elgg_echo('sharemaps:none') . '</p>';
}

$upload_link = elgg_view('output/url', array(
	'href' => "sharemaps/add/$group->guid",
	'text' => elgg_echo('sharemaps:add'),
	'is_trusted' => true,
));

$create_link = elgg_view('output/url', array(
	'href' => "sharemaps/drawmap/add/$group->guid",
	'text' => elgg_echo('sharemaps:drawmap'),
	'is_trusted' => true,
));

echo elgg_view('groups/profile/module', array(
	'title' => elgg_echo('sharemaps:group'),
	'content' => $content,
	'all_link' => $all_link,
	'add_link' => $upload_link.' - '.$create_link,
));
