<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use View;
use File;
use App\News;
use App\NewsComment;
use Folklore\Image\Facades\Image;
use App\Jobs\ResizeImages;

class NewsController extends Controller
{

    public function formNews() {
    	$currentUser = Auth::user();
        if ($currentUser) {
            return view ('createnews');
        } else {
            return "Please log in or register before inserting your fucking news. <a href='/login'>Neh, awand</a>";
        }
    	
    }


    public function insertNews(NewsRequest $req){
    	//Product::create($req->all());

    	$title = $req->input('title');
		$body = $req->input('body');
		$category = $req->input('category');
		//immagine is the name attribute of input type inside the form
		$img_url = $req->file('immagine')->store('public/userfiles'); //upload image
		$img_url = Storage::url($img_url); //get url of image

        //lancio il resize
        dispatch(new ResizeImages($img_url));

		$news = new News();
    	
    	//	 ->name of column table 
    	$news->title = $title;
    	$news->body = $body;
    	$news->category = $category;
    	$news->img = $img_url;
    	$news->user_id = Auth::user()->id;

    	$news->save();

    	//Session::flash('newsInserted', "News inserted! :)");
    	//return redirect()->back();
    	return redirect('/');

    }


    public function showAdminPage()
    {
        if (Auth::check()) {
    
            $currentUser = Auth::user();
            //prendo tutte le news inserite dall'utente loggato
            $userNews = $currentUser->news()->get();
            return view ('/admin_page')->with('userNews', $userNews);

        } else {
            return redirect()->guest('/login');
        }
    }


    public function showSingleNews($id, $title) {
        $news = News::where('id', $id)->first();
        $comments = NewsComment::where('news_id', $id)->get(); 
        return view ('/news')->with('news', $news)->with('comments', $comments);
    }
}
