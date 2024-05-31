<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $topics = Topic::orderBy('created_at', 'desc');

        if (request()->has('search')) {
            $topics = Topic::where('content', 'like', '%' . request('search') . '%');
        }



        return view('dashboard', [
            'topics' => $topics->paginate(5),
        ]);
    }
}
