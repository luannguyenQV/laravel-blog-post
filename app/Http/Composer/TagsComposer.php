<?php
namespace App\Http\Composer;

use Illuminate\Contracts\View\View;
use App\Tag;

class TagsComposer
{
    public function compose(View $view) {
        $view->with('tags', Tag::all());
    }
}