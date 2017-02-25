<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;

class CategoryController extends Controller
{
    /**
     * Display a listing of the Category.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $categories = Category::all()->toHierarchy();
        return view('admin.modules.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::lists('name', 'id');   
        $categories['0'] = '---select---';
        return view('admin.modules.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parentID = $request->category;
                  
        $newCategory = new Category();
        $newCategory->name = $request->name;
        $newCategory->slug = str_slug($request->name);
        if ($parentID === '0') {
            // $newCategory->parent_id = null;
            // $newCategory->makeRoot();
            $newCategory->save();
        } else {
            $parentRoot = Category::find($parentID);
            $newCategory->save();
            $newCategory->makeChildOf($parentRoot);
        }      

        return redirect()->action('Backend\CategoryController@index')->with('success', "Category created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::where('slug', $id)->first();
        return view('admin.modules.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::lists('name', 'id');    
        $categories[0] = '--select--';
        return view('admin.modules.categories.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        $category = Category::find($id);
        //$category->parent_id = $request->category;
        if ($category->id !== $request->category)
            $category->makeChildOf( $request->category);
        $category->name = $request->name;
        $category->save();
        return redirect()->action('Backend\CategoryController@index')->with('success', "Category edited successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::where('slug',$id);
        $category->delete();
        return redirect()->action('Backend\CategoryController@index')->with('success', "Delete successfully");
    }
}
