Plugin Name: TNW Social Count
Plugin URI: http://stijlfabriek.com
Description: TNW Social Count is a WordPress plugin that solves the problem of social sharing the proper way. No more third-party scripts that slow down your site and ugly buttons that clutter your design.
The plugin has two parts: The backend part saves the number of Twitter retweets, Facebook likes, Google Plus and LinkedIn shares as post_meta information. 
The frontend part renders a share button on the same fashion as on The Next Web blog. 
Version: 1.0
Author: Pablo Román for The Next Web
Author URI: http://stijlfabriek.com


Installation:
After activating the plugin, just include the following snippet of code in your theme, wherever you want the button to appear:

  	<?php 
			if(function_exists('render_tnwsc_button')) {
				echo render_tnwsc_button();
			} 
		?>


Need to do better migration for new social network support. For now, run this command manually to update the option: 
`wp eval 'update_option('tnwsc_services', array('facebook' => 1, 'twitter' => 1, 'linkedin' => 1, 'google' => 1, 'stumbleupon' => 1, 'pinterest' => 1));'`