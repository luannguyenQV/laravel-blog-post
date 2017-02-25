<?php
namespace App\Http\Composer;

use App\Post;
use Illuminate\Contracts\View\View;

class LastedPostComposer {

    public function compose(View $view)
    {
        $view->with('posts', Post::all()->take(6));
    }
    
}