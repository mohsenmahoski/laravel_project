<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //get path and convert it to all routes
    public function get_url($path){
        
        $base = url('/');
        $routes =array();
        $urls = str_replace($base, '' , $path);
    	$urls = explode('/',  $urls);
    
        foreach ($urls as $url) {
        	if ($url != '') {
           
	        	if ( $url == 'blog' ) {
	        
	        		array_push($routes , ['route'=>'blog.index','name'=>'بلاگ']);
	        	}
	        	if ( $url == 'shop' ) {
	        
	        		array_push($routes , ['route'=>'shop','name'=>'فروشگاه']);
	        	}
	        	if ( $url == 'about_us' ) {
	        
	        		array_push($routes , ['route'=>'about_us','name'=>'درباره ما']);
	        	}
	        	
        	}


        	
        }
        array_push( $routes , ['route'=>'home','name'=>'صفحه اصلی']);

        return $routes;
    }
}
