<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class BlogController extends Controller
{
	
	public function getIndex(Request $request){
		$posts = Post::orderBy('id','desc')->paginate(6);
		$category = Category::all();
		//get all routes from url request
		$routes = Controller::get_url( $request->url() );
        

		return View('blog.index')->withPosts($posts)->withCategory($category)->withRoutes($routes);
	}
   public function getsingleblog(Request $request , $slug){
   	  
   	  $routes = Controller::get_url( $request->url() );

      $post = Post::where('slug','=',$slug)->first();
      $posts = Post::where('category_id' , '=' , $post->category_id )->orderBy('id','desc')->paginate(6);
      return View('blog.single')->withPost($post)->withPosts($posts)->withRoutes($routes);
   }
}
