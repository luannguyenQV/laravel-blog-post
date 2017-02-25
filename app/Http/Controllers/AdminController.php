<?php

namespace App\Http\Controllers;

use App\ImageModel;
use App\Product;
use App\Setting;
use App\Post;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function settings() {
    	$settings = Setting::find(1);
    	return view('admin.settings', compact('settings'));
    }

    public function updateSettings(Request $request) {
    	$settings = Setting::find(1);
    	$settings->fill($request->input())->save();

    	return redirect(route('admin.settings'));
    }

    public function dashboard() {
        // Number of Post
        $numOfPost = Post::count();
        $recentlyPost = Post::take(5)->get();
        // Number of Users
        $numOfUser = User::count();
        // Number of Admission
        // Number of ...
    	return view('admin.dashboard', compact('numOfPost', 'numOfUser', 'recentlyPost'));
    }

}
