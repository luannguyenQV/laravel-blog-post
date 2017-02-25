<?php
namespace App\Http\Controllers\Backend;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests;
use App\Category;
use App\Http\Requests\CreatePostRequest;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    protected $categories;

    public function __construct()
    {
        $this->categories = Category::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'desc')->get();
        return view('admin.modules.posts.index')->with([
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.modules.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        $this->validate($request, [
                
        ]);
        $post = new Post();

        $post->title = $request->title;
        $slug = str_slug($request->get('title'));
        $post->slug = $slug;
        $post->body = $request->body;
        $post->display = 1;
        $post->excerpt = $request->excerpt;
        $post->category = $request->cetegory;

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $filename = time() . '.' . $img->getClientOriginalExtension();
            Image::make($img)->save(public_path('/assets/blog/' . $filename));
            $post->image_id = $filename;
        }

        $post->save();

        $tags = tags_to_array($request->get('tags'));
        foreach ($tags as $tag) {
            $tag = Tag::firstOrCreate(['name' => $tag]);
            $post->tags()->attach($tag);
        }

        foreach ($this->categories as $node) {
            if (null != $request->get($node->id)) {
                $product->categories()->attach($node->id);
            }
        }

        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "Show Post";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $curCategory = $post->categories;
        return view('admin.modules.posts.edit')->with([
            'post' => $post,
            'categories' => $this->categories,
            'curCategory' => $curCategory,
        ]);
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
        $post = Post::find($id);

        $post->title = $request->title;
        $slug = str_slug($request->get('title'));
        $post->slug = $slug;
        $post->body = $request->body;
        $post->display = 1;
        $post->excerpt = $request->excerpt;
        $post->category = $request->cetegory;

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $filename = time() . '_' . $img->getClientOriginalName() . '.' . $img->getClientOriginalExtension();
            Image::make($img)->save( public_path('/assets/blog/' . $filename ) );
            $post->image_id = $filename;
        }
        $post->save();

        $tags = tags_to_array($request->get('tags'));
        foreach ($tags as $tag) {
            $tag = Tag::firstOrCreate(['name' => $tag]);
            $post->tags()->detach($tag);
            $post->tags()->attach($tag);
        }

        $categoryIDs = array();
        foreach ($this->categories as $node) {
            if (null != $request->get($node->id)) {
                array_push($categoryIDs, $node->id);
            }
        }
        $post->categories()->sync($categoryIDs);
        
        return redirect(route('admin.posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('admin.posts.index');
    }
}
