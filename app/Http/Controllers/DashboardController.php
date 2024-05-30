<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class DashboardController extends Controller{

    public function index(){

        // $topic = new Topic([
        // ]);
        // $topic->content = "test";
        // $topic->likes = 0;
        // $topic->save();

        return view('dashboard',[
            'topics'=> Topic::orderBy('created_at','desc')->paginate(5),
        ]);
    }
}

