<?php
	Route::get("/test", function() { 
		View::page("public/test.php");
	});
	Route::get("/merhaba", function() { 
		echo "merhaba!";
	});