<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $news = \App\Models\Post::where('type', 'news')->latest()->take(3)->get();
        $gallery = \App\Models\GalleryItem::latest()->take(4)->get();
        $programs = \App\Models\Program::where('is_active', true)->get();
        return view('pages.home', compact('news', 'gallery', 'programs'));
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
        $posts = \App\Models\Post::where('type', 'news')->latest()->paginate(6);
        return view('pages.news', compact('posts'));
    }

    public function newsDetail($slug)
    {
        $post = \App\Models\Post::where('slug', $slug)->firstOrFail();
        return view('pages.news_detail', compact('post'));
    }

    public function programDetail($slug)
    {
        $program = \App\Models\Program::where('slug', $slug)->firstOrFail();
        return view('pages.program_detail', compact('program'));
    }

    public function contact()
    {
        return view('pages.contact');
    }



    public function submitPengaduan(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'message' => 'required',
        ]);

        \App\Models\Complaint::create($request->all());

        return back()->with('success', 'Pengaduan Anda berhasil dikirim.');
    }
}
