<?php

namespace App\Http\Controllers\Admin;
use App\Http\Resources\PostResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category; 

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       // $this->middleware('auth');

        
    }
    public function index()
    {
       $arr['post'] = Post::with('category')->paginate(3);
        
       // return view('admin/posts/admin_posts')->with($arr);
      // $posts =  Post::all();
       return $arr['post'];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$this->middleware('auth');
        $arr['category'] = Category::all();
       // return view('admin/posts/create_posts')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,post $post)
    {
       /* if($request->image->getClientOriginalName()){
        $ext = $request->image->getClientOriginalExtension();
        $file = date('YmdHis').rand(1,999999).'.'.$ext;
        $request->image->storeAs('public/posts',$file);
        }
        else
        {
            $file='';
        } 
        $post->image = $file;
        $post->title = $request->title;
        $post->catagory_id = $request->category_id;
        $post->post = $request->post;
        $post->author = $request->author;
        $post->save();
        return redirect()->route('admin.posts.index');*/

        return Post::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post): PostResource
    {
        return new PostResource($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->middleware('auth');
        $arr['category'] = Category::all();
        $arr['post'] = $post;
        return view('admin/posts/edit_posts')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       /* $this->middleware('auth');
        
        if(isset($request->image) && $request->image->getClientOriginalName()){
            $ext = $request->image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,999999).'.'.$ext;
            $request->image->storeAs('public/posts',$file);
            }
            else
            {
                if(!$post->image){
                    $file='';
                }else
                    $file = $post->image;
            } 
            $post->image = $file;
            $post->title = $request->title;
            $post->post = $request->post;
            $post->author = $request->author;
            $post->catagory_id = $request->category_id;
            $post->save();
            return redirect()->route('admin.posts.index');*/

            $post = Post::find($id);
            $post->update($request->all());
            return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       /* $this->middleware('auth');
        post::destroy($id);
        return redirect()->route('admin.posts.index');*/
        return Post::destroy($id);
    }
}
