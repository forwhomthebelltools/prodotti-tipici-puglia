<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

use App\Product;

use App\News;

use Illuminate\Support\Facades\Auth;

use Session;


//https://stackoverflow.com/questions/28573860/laravel-requestall-should-not-be-called-statically


class EditNewsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showNews ($id) {
    	if (Auth::check()) {
    		$currentUser = Auth::user();
    		$newsRequested = News::find($id);
    		if ($newsRequested->user_id == $currentUser->id) {
	    		$categories = ["itinerari" => "Itinerari", "gastronomia" => "Gastronomia", 
					"viaggi" => "Viaggi"];
	    		$newsCollection = News::where('id', $id)->with('user')->get();
				return view ('modifynews')->with('newsCollection',$newsCollection)->with('categories',$categories); 
			} else {
				$hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
				$ipaddress = $_SERVER['REMOTE_ADDR'];
				return "Don't fuck with me! Your public ip is " . $ipaddress;
				//I want to get IP of bad user
			} 

		} else {
			return redirect('/login');
		}
	}

	public function editNews(Request $req, $id) {
		$news = News::find($id);
		$news->title = $req->input('title');
		$news->body = $req->input('body');
		$news->category = $req->input('category');
		$news->save();
		Session::flash('message', "News modified");
    	//return redirect()->back();
    	return redirect('/admin_page');

    	//session flash persists for 2 requests
    	//fixed thanks to here -> https://stackoverflow.com/questions/14517809/laravels-flash-session-stores-data-twice
    	//and here -> https://stackoverflow.com/questions/24579580/laravel-session-flash-persists-for-2-requests
	}

	    public function deleteNews($id){
    	//https://stackoverflow.com/questions/41366092/property-title-does-not-exist-on-this-collection-instance
    	$deletedNews = News::where('id', $id)->first();
    	//$deletedProduct = Product::find($id)->get();
    	$urlDeletedNews = $deletedNews->img;
    	$deletedNews->delete();
    	unlink(public_path($urlDeletedNews));
    	//File::delete("storage/userfiles/aa.jpeg"); //no slash iniziale!!!
    	return redirect ('/');
    }


	

}
