<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\image;
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $page='backend.pages.';
    public function index()
    {
        $data['item']=DB::table('images')->get();
        return view($this->page.'gallary',$data);
    }
    public function addimage()
    {
        return view($this->page.'addimage');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'cap'=>'required|max:255',
                'img'=>'required|image|mimes:jpeg,png,gif,jpg,bmp',
            ],
            [
                'cap.required'=>'caption is needed',
            ],
            [
                'cap'=>'caption',
                'img'=>'image'
            ]
        );

        $imageName=time().'.'.$request->img->getClientOriginalExtension();
        $request->img->move(public_path('images'),$imageName);
        // echo $imageName;
        // $post=new image();
        // $post->cap=$request['cap'];
        // $image=$request['img'];
        // $name="";
        // if(!empty($image)){
        //     $name=$image->getClientOriginalName();
        //     echo $name;
        // }
        //$post->save();

        DB::table('images')->insert([
            'title'=>$request->cap,
            'image'=>$imageName,
        ]);
        return redirect()->route('Gallary')->with('success','Image sucessully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editimg($id)
    {
      $data['imgg']=DB::table('images')->find($id);
       return view($this->page.'editimg',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $this->validate($request,
        //     [
        //         'cap'=>'required|max:255',
        //         'img'=>'required|image|mimes:jpeg,png,gif,jpg,bmp',
        //     ],
        //     [
        //         'cap.required'=>'caption is needed',
        //     ],
        //     [
        //         'cap'=>'caption',
        //         'img'=>'image'
        //     ]
        // );

        
        
        if(!empty($request->oldname && $request->title)){
            $imageName=$request->oldname;
            $caption=$request->title;
            $request->oldname->move(public_path('images'),(unlink($imageName)));
            
            DB::table('images')->where('id',$request->id)->update([
                'title'=>$caption,
                'image'=>$request->oldname      
            ]);
        }
        if(!empty($request->newname && $request->title)){
            $caption=$request->capp;
            $caption=$request->title;
            $imageName=time().'.'.$request->newname->getClientOriginalExtension();
            $request->newname->move(public_path('images/'),$imageName);

            DB::table('images')->where('id',$request->id)->update([
                'title'=>$caption,
                'image'=>$imageName,     
            ]);
        }
            //$imageName=time().'.'.$request->newname->getClientOriginalExtension();
            // $request->newname->move((public_path('images/')),($imageName));
      
            // DB::table('images')->where('id',$request->id)->update([
            //     'title'=>$request->cap,
            //     'image'=>$imageName,     
            // ]);
        return redirect()->route('Gallary')->with('success','Upload success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
