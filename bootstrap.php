<?php

if(COCKPIT_ADMIN) {
    
    $app->on("admin.init", function() use($app){
               
        // menu item
        $app("admin")->menu("top", [
            "url"    => 'http://mysite.com',
            "label"  => '<i class="uk-icon-eye"></i>',
            "title"  => $app("i18n")->get("View site")
        ], -1);
        
    });
    
}