<?php

$tnwsc_config = array(
	'services' => array(
		'facebook' => array('url' => "https://graph.facebook.com/fql?q=%s", 'params' => 'SELECT url,normalized_url,share_count,like_count,comment_count,total_count,click_count FROM link_stat WHERE url = "%s"'),
		'twitter' => array('url' => "http://urls.api.twitter.com/1/urls/count.json?url=%s"),
		'linkedin' => array('url' => "http://www.linkedin.com/countserv/count/share?url=%s"),
		'google' => array('url' => "https://clients6.google.com/rpc"),
		'stumbleupon' => array('url' => "http://www.stumbleupon.com/services/1.01/badge.getinfo?url=%s"),
		'pinterest' => array('url' => "http://api.pinterest.com/v1/urls/count.json?callback=receiveCount&url=%s")
	)
);

$tnwsc_wp_options = array(
	'tnwsc_services' => array('facebook' => 1, 'twitter' => 1, 'linkedin' => 1, 'google' => 1, 'stumbleupon' => 1, 'pinterest' => 1),
	'tnwsc_sync_frequency' => 3600, // - Frequency (in seconds) of update the social count; Defaults to one check per hour
	'tnwsc_post_range' => 604800, // - Sync social count for posts published before this number of seconds; Defaults to ( -7 days )
	'tnwsc_active_sync' => 0, // - Whether the sync is active ( 1 or 0 ). Defaults to inactive
	'tnwsc_debug' => 1,
	'tnwsc_log_path' => dirname( __FILE__).'/tnwsc.log'
); 

?>