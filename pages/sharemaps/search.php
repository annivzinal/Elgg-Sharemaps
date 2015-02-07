<?php
/**
 * @package ElggShareMaps
 */

$page_owner_guid = get_input('page_owner', null);

if ($page_owner_guid !== null) {
	$page_owner_guid = sanitise_int($page_owner_guid);
}

if ($page_owner_guid) {
	elgg_set_page_owner_guid($page_owner_guid);
}
$owner = elgg_get_page_owner_entity();

group_gatekeeper();

// Get input
$md_type = 'simpletype';
// avoid reflected XSS attacks by only allowing alnum characters
$file_type = preg_replace('[\W]', '', get_input('tag'));
$listtype = get_input('listtype');
$friends = (bool)get_input('friends', false);

// breadcrumbs
elgg_push_breadcrumb(elgg_echo('file'), "sharemaps/all");
if ($owner) {
	if (elgg_instanceof($owner, 'user')) {
		elgg_push_breadcrumb($owner->name, "sharemaps/owner/$owner->username");
	} else {
		elgg_push_breadcrumb($owner->name, "sharemaps/group/$owner->guid/all");
	}
}
if ($friends && $owner) {
	elgg_push_breadcrumb(elgg_echo('friends'), "sharemaps/friends/$owner->username");
}
if ($file_type) {
	elgg_push_breadcrumb(elgg_echo("sharemaps:type:$file_type"));
} else {
	elgg_push_breadcrumb(elgg_echo('all'));
}

// title
if (!$owner) {
	// world files
	$title = elgg_echo('all') . ' ' . elgg_echo("sharemaps:type:$file_type");
} else {
	$friend_string = $friends ? elgg_echo('sharemaps:title:friends') : '';
	$type_string = elgg_echo("sharemaps:type:$file_type");
	$title = elgg_echo('sharemaps:list:title', array($owner->name, $friend_string, $type_string));
}


$sidebar = sharemaps_get_type_cloud($page_owner_guid, $friends);

if ($friends) {
	// get current elgg version
	$release = elgg_get_version(true);
	if ($release < 1.9)  { // version 1.8
		// elgg_does not support getting objects that belong to an entity's friends
		$friend_entities = get_user_friends($page_owner_guid, "", 999999, 0);
	}
	else { // use this since Elgg 1.9
		$friend_entities = $owner->getFriends(array('limit' => false));
	}	

	if ($friend_entities) {
		$friend_guids = array();
		foreach ($friend_entities as $friend) {
			$friend_guids[] = $friend->getGUID();
		}
	}
	$page_owner_guid = $friend_guids;
}

$limit = 10;
if ($listtype == "gallery") {
	$limit = 12;
}

$params = array(
	'types' => 'object',
	'subtypes' => 'sharemaps',
	'container_guid' => $page_owner_guid,
	'limit' => $limit,
	'full_view' => false,
);

if ($file_type) {
	$params['metadata_name'] = $md_type;
	$params['metadata_value'] = $file_type;
	$content = elgg_list_entities_from_metadata($params);
} else {
	$content = elgg_list_entities($params);
}

$body = elgg_view_layout('content', array(
	'filter' => '',
	'content' => $content,
	'title' => $title,
	'sidebar' => $sidebar,
));

echo elgg_view_page($title, $body);
