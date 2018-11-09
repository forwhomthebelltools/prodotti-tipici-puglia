<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

use App;

use Session;

use File;

use App\Mail\ContactReceive;

use Illuminate\Support\Facades\Mail;

//https://stackoverflow.com/questions/28573860/laravel-requestall-should-not-be-called-statically

use App\Product;

use App\Comment;

class PublicController extends Controller

{


        function contactForm() {

        return view ('/contatti');

    }


	function contactMail (Request $request) {

		//$input = $request->all();

		$this->validate($request, [

			'email' => 'required|email',
			'name' => 'required|max:50',
			'message' => 'required|max:255'

		], [

			'email.required' => 'We need an email address',
			'name.required' => 'Please insert your name and surname',
			'message.required' => 'Please insert your message'

		]);

		$dati = [
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'message' => $request->input('message'),
			];

		Mail::to('alessandro.schiri@alice.it')->send(new ContactReceive($dati));

		Session::flash('mailSent', "Mail sent :)");


		//return redirect()->route('thankyou', ['name'=>$name]);
		//return redirect('showproducts');
        return redirect()->back();
    }

	/*public static function updatedTime($now,$updating) {
        
        //get Unix Epoch of now    
        $a=strtotime($now);
        //get d-m H-i-s of now
        $nowYear = date('Y', $a);
        $nowDay = date('d', $a);
        $nowMonth = date('m', $a); 
        $nowHour = date('H', $a); 
        $nowMinutes = date('i', $a);
        $nowSeconds = date('s', $a);
        
        //get Unix Epoch of updating time
        $b=strtotime($updating);
        //get d-m H-i-s of now
        $updatingYear = date('Y', $b);
        $updatingDay = date('d', $b);
        $updatingMonth = date('m', $b); 
        $updatingHour = date('H', $b);
        $updatingMinutes = date('i', $b);
        $updatingSeconds = date('s', $b);

        if ($nowYear - $updatingYear == 0) {
        	if ($nowMonth - $updatingMonth == 0) {
        		if ($nowDay - $updatingDay == 0) {
        			return $nowHour - $updatingHour;
        		}
        	}
        } 
    
    }
    */


    public static function showNumberOfComments($id) {
    	$comments = App\Comment::where('product_id', $id)->get()->count();
    	return view ('showproducts')->with('comments', $comments);
    }


    public function showCategories($category) {
    	$categoryNews= App\News::where('category', $category)->get();
    	return view ('/category')->with('categoryNews', $categoryNews)->with('category', $category);
    }

    public function setLocale(Request $request, $locale) {
        $request->session()->put('locale', $locale);
        
        return redirect()->back();


    }    


}

