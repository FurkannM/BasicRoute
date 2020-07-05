# BasicRoute
PHP based route system

# Example Routes in routes.php

## get request route with function

Route::get("/test", function() { 
  echo "Hello World! This is a get request.";
});

## get request route with view
Route::get("/test", function() { 
  View::page("public/test.php");
});

## post request route with function

Route::post("/test", function() { 
  echo "Hello World! This is a get request.";
});

## post request route with view
Route::post("/test", function() { 
  View::page("public/test.php");
});
