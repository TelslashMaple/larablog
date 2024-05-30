<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TopicController extends Controller
{
    public function show(Topic $topic)
    {
        return view('topics.show', compact('topic'));
    }

    public function store()
    {
        request()->validate([
            'topic' => 'required|min:3|max:240',
        ]);
        $topic = Topic::create([
            'content' => request()->get('topic', ''),
        ]);

        return redirect()->route('dashboard')->with('success', 'Posted successfully!');
    }

    public function destroy(Topic $topic)
    {
        $topic->delete();

        return redirect()->route('dashboard')->with('success', 'Post deleted successfully!');
    }

    public function edit(Topic $topic)
    {
        $editing = true;

        return view('topics.show', compact('topic', 'editing'));
    }

    public function update(Topic $topic)
    {
        request()->validate([
            'content' => 'required|min:3|max:240',
        ]);

        $topic->update(['content' => request('content')]);

        return redirect()
            ->route('topics.show', $topic->id)
            ->with('success', 'Post has been updated');
    }
}
