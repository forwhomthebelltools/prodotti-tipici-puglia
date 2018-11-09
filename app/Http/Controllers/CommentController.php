<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\NewsComment;
use App\Product;
use App\News;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller

{

    public function insertNewsComment(Request $req, $id) {

    $currentUser = Auth::user();
    
    if ($currentUser) {
    
        $newsCommentInserted = $req->input('comment');
        $newsCommented = News::find($id);

        $comment = new NewsComment();

        $comment->comment=$newsCommentInserted;
        $comment->news_id=$newsCommented['id'];
        $comment->user_id=$currentUser->id;
        $comment->save();

        return redirect ('/');
    
        } else {
    
            return "Please log in or register before inserting your fucking comment. <a href='/login'>Neh, awand</a>";
    
        }


    }

        public function deleteNewsComment($id) {

        $deletedComment = NewsComment::find($id);
        $deletedComment->delete();
        return redirect ('/');

    }

    // public function insertComment(Request $req, $id) {

    // $currentUser = Auth::user();
    
    // if ($currentUser) {
    
    //     $commentInserted = $req->input('comment');
    //     $productCommented = Product::find($id);

    //     $comment = new Comment();

    //     $comment->comment=$commentInserted;
    //     $comment->product_id=$productCommented['id'];
    //     $comment->user_id=$currentUser->id;
    //     $comment->save();

    //     return redirect ('showproducts');
    
    //     } else {
    
    //         return "Please log in or register before inserting your fucking comment. <a href='/login'>Neh, awand</a>";
    
    //     }


    // }
	

}
