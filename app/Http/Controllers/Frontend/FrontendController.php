<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use View;   

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Giới thiệu
        $tgioithieu = Post::where('category', '1')->orderBy('updated_at','DESC')->first();
        $fgioithieu = Post::where('category', '1')->first();
        $gioithieus = Post::where('category', '1')->skip(1)->take(4)->get();
        // Tuyển sinh
        $ftuyensinh = Post::where('category', '1')->take(2)->get();
        $tuyensinhs = Post::where('category', '1')->skip(2)->take(4)->get();
        // Tin tuc
        $tintucs = Post::where('category', '1')->take(6)->get();

        $khoas = Post::where('category', '1')->take(6)->get();
        return View::make('home', compact('fgioithieu', 'gioithieus', 'ftuyensinh', 'tuyensinhs', 'tintucs', 'khoas'));
    }

    public function postdetail($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $category = $post->category;
        $relationPost = Post::where('category', $category)->take(5)->get();
        return view('layouts.postlayout', compact('post', 'relationPost'));
    }

    public function khoa()
    {
        $posts = Post::where('category', 1)->get();
        $title = "Khoa";
        return view('layouts.pagelayout', compact('posts', 'title'));
    }

    public function tintuc()
    {
        return view('layouts.pagelayout', compact('posts'));
    }

    public function hoptacquocte()
    {
        return view('layouts.pagelayout', compact('posts'));
    }

    public function phongban()
    {
        return view('layouts.pagelayout', compact('posts'));
    }

    public function gioithieu()
    {
        return view('layouts.pagelayout', compact('posts'));
    }

    public function hoidap()
    {
        return view('layouts.pagelayout', compact('posts'));
    }

    public function lienhe()
    {
        return view('layouts.pagelayout', compact('posts'));
    }
}
