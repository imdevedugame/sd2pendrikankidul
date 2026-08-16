<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $news = \App\Models\Post::where('type', 'news')->latest()->take(3)->get();
        $gallery = \App\Models\GalleryItem::latest()->take(4)->get();
        return view('pages.home', compact('news', 'gallery'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function teachers()
    {
        $teachers = \App\Models\Teacher::all();
        return view('pages.teachers', compact('teachers'));
    }

    public function gallery()
    {
        $gallery = \App\Models\GalleryItem::latest()->get();
        return view('pages.gallery', compact('gallery'));
    }

    public function news()
    {
        $posts = \App\Models\Post::latest()->paginate(10);
        return view('pages.news', compact('posts'));
    }

    public function newsDetail($slug)
    {
        $post = \App\Models\Post::where('slug', $slug)->firstOrFail();
        return view('pages.news_detail', compact('post'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitContact(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        \App\Models\Message::create($request->all());

        return back()->with('success', 'Pesan Anda berhasil dikirim.');
    }
}
