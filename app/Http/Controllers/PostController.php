<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBy('id','desc')->paginate(4);
        return view('backend.posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'title'=>'required|unique:posts',
                'description'=>'required',
                'author'=>'required',
                'image'=>'required|image|mimes:jpeg,png,gif,jpg,bmp',
                'image'=>'required',
                'date'=>'required',

            ]
        );
        $post=new Post();
        $post->title=$request->title;
        $post->description=$request->description;
        $post->author=$request->author;
        $post->publish_date=$request->date;
        $post->status=$request->status;
        $image=$request->image;
        $name="";
        if(!empty($image)){
            $name=time().'.'.$image->getClientOriginalExtension();
            $image->move('postimage/',$name);
            // echo $name;
        }
        $post->image=$name;
        $post->save();

        // Session::flash('success','The news have been posted successfully');

        return redirect()->route('posts.show',$post->id)->with('success','The news have been posted successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
        return view('backend.posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        return view('backend.posts.edit')->withPost($post);
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
        $post=Post::find($id);
        if($request->input('title')==$post->title){
            $this->validate($request,
                [
                'description'=>'required',
                'author'=>'required',
                ]
            );
        }
        else{
            $this->validate($request,
                [
                    'title'=>'required|unique:posts',
                    'description'=>'required',
                    'author'=>'required',
                ]
            );
        }
        $post=Post::find($id);
        $post->title=$request->input('title');
        $post->description=$request->input('description');
        $post->author=$request->input('author');
        $post->status=$request->input('status');
        $image=$request->image;
        $name='';
        if(!empty($image)){
            $oldimage=$post->image;
            $file=public_path()."/postimage/".$oldimage;
            File::delete($file);

            $name=time().'.'.$image->getClientOriginalExtension();
            $image->move('postimage/',$name);
            $post->image=$image;
        }
        
        $post->image=$name;
        
        $post->save();

        if(!$post){
            return redirect()->back()->with('error','Failed to update....');
        }
        return redirect()->route('posts.show',$post->id)->with('success','News updated successfully !! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $image=$post->image;
        $file=public_path()."/postimage/".$image;
        File::delete($file);

        $post->delete();

        return redirect()->route('posts.index')->with('success','Post Deleted successfully');
    }
}
