<?php

if(COCKPIT_ADMIN) {

	$app->on("admin.init", function() use($app){

		$app->bindClass("Preview\\Controller\\Preview", "preview");
	
		// menu item
		$app("admin")->menu("top", [
				"url"    => $app->routeUrl("/preview"),
				"label"  => '<i class="uk-icon-eye"></i>',
				"title"  => $app("i18n")->get("View Website")
		], -2);
		
	});

	$app->on('admin.dashboard.aside', function() {

		$this->renderView('preview:views/dashboard.php with cockpit:views/layouts/dashboard.widget.php');
	});



}
