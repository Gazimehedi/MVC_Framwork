<?php 


class Route
{
    public static function get($path ,$callback)
    {
        return $callback;
    }
}

Route::get('/user',function(){
    echo "<h1>This is User Page</h1>";
});

















?>