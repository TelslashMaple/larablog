<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Topic;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Topic $topic){

        $comment = new Comment();
        $comment->topic_id = $topic->id;
        $comment->content = request()->get('content');
        $comment->save();

        return redirect()->route('topics.show',$topic->id)->with('success','Comment posted successfully!');

    }
}
