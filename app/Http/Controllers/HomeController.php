<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

use Folklore\Image\Facades\Image;

use App\News;

use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //sono protetto: posso accederci solo
    //se autenticato
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('id', 'desc')->take(4)->get();
        // $currentUser = Auth::user();
        // //prendo tutti i prodotti inseriti dall'utente loggato
        // $userProducts = $currentUser->products()->get();
        // return view('home', ['userProducts' => $userProducts]);
        return view ('home')->with('news', $news);
    }

    public function UploadImageProfile(Request $req) {

        $img_url = $req->file('imageProfile')->store('public/imageusers'); //upload image
        $img_url = Storage::url($img_url); //get url of image

        //RESIZING IMAGE
        //absolute path
        $path = public_path($img_url);

        $new_image = Image::make($path,
            [
                'width' => 75,
                'height' => 75,
                'crop' => true,
            ]);

        //save again the new resized image on the same path
        $new_image->save($path);

        $currentUser = Auth::user();

        //delete previous image
        $urlDeletedImage = $currentUser->img;
        unlink(public_path($urlDeletedImage));


        $currentUser->img = $img_url;
        $currentUser->save();

        return redirect('/admin_page');

    }

}
