<?php
namespace App\Helpers;
class Helper {

public static function get_guard_name(){
    return config('custom_config.guard', config('auth.defaults.guard'));
}    

public static function guard_auth(){
    return \Auth::guard(Helper::get_guard_name());
}

public static function admin_url($path = null, $parameters = [], $secure = null){
    $path = ! $path || (substr($path, 0, 1) == '/') ? $path : '/'.$path;
    return url(config('custom_config.route_prefix', 'admin').$path, $parameters, $secure);
}
 
public static function admin_guard_name(){
    return config('custom_config.guard', 'admin');
}

}