<?php

$redirects = [

    /*btn before main menu*/
    /*['','', 301],*/

];

foreach ($redirects as $rules) {
	if (preg_match($rules[0], $_SERVER['REQUEST_URI'])) {
			wp_redirect(site_url() . $rules[1], $rules[2]);
			exit();
		}
}
