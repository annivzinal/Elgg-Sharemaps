<?php
/**
 * Map sidebar
 */

echo elgg_view('page/elements/comments_block', array(
	'subtypes' => 'sharemaps',
	'owner_guid' => elgg_get_page_owner_guid(),
));

echo elgg_view('page/elements/tagcloud_block', array(
	'subtypes' => 'sharemaps',
	'owner_guid' => elgg_get_page_owner_guid(),
));
