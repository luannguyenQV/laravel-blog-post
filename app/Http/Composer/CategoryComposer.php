<?php
namespace App\Http\Composer;

use Illuminate\Contracts\View\View;
use App\Category;
/**
 * Created by PhpStorm.
 * User: van
 * Date: 6/28/2016
 * Time: 10:40 AM
 */
class CategoryComposer
{
    public function __construct() {

    }

    public function compose(View $view) {
        $view->with('categories', Category::all()->toHierarchy());
    }
}