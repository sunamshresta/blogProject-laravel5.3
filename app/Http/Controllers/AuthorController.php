<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AuthorController extends Controller
{
	private $page='backend.pages.';
	public function author()
    {

    	$data['data']=DB::table('authors')->orderBy('created_at','desc')->get();
        return view($this->page.'author',$data);
    }
    public function addauthor(){
    	return view($this->page.'addauthor');
    }
    public function addaction(Request $request){
    	$this->validate($request,
    		[//for required
    		'name'=>'required|max:255',
    		'address'=>'required',
    		'email'=>'required|unique:authors,email',
    		'contact'=>'required|unique:authors,contact|numeric',
    		'uname'=>'required|max:35|min:3',
    		'pname'=>'required|min:8',
    		'cnfp'=>'required|same:pname'
    	],
    	[
    		//for displaying user compatible msg
    		
    		'address.required'=>'Author address is required to fill',
    		'email.required'=>'valid email is required to fill',
    		'contact.required'=>'Enter the contact no.',
    		'uname.required'=>'GIve ur user name',
    		'pname.required'=>'enter  a valid password',
    		#'cnfp.required'=>'give the correct password'


    	],
    	[
    		//to change textfield name
    		'name'=>'Author Name',
    		'pname'=>'Password',
    		'cnfp'=>' confirm password'
    	]
    	);
    	DB::table('authors')->insert([
    		//'name'=>$request->input('name')
    		'name'=>$request->name,
    		'address'=>$request->address,
    		'email'=>$request->email,
    		'contact'=>$request->contact,
    		'username'=>$request->uname,
    		'password'=>bcrypt($request->pname)

    	]);
    	return redirect('/admin/author')->with('success','Author details added successully !!!');//sesstion variable (name,msg)
    }
    public function edit($id){
    	 $data['item']=DB::table('authors')->find($id);
        return view($this->page.'editauthor',$data);
    }
    public function updateaction(Request $a){
    	$this->validate($a,
    		[//for required
    		'name'=>'required|max:255',
    		'address'=>'required',
    		'email'=>'required',
    		'contact'=>'required|numeric',
    		
    	],
    	[
    		//for displaying user compatible msg
    		
    		'address.required'=>'Author address is required to fill',
    		'email.required'=>'valid email is required to fill',
    		'contact.required'=>'Enter the contact no.',
    		
    		#'cnfp.required'=>'give the correct password'


    	],
    	[
    		//to change textfield name
    		'name'=>'Author Name',
    		
    	]
    	);
    	DB::table('authors')->where('id',$a->id)->update([
    		'name'=>$a->name,
    		'address'=>$a->address,
    		'email'=>$a->email,
    		'contact'=>$a->contact,
    		'username'=>$a->uname,
    	]);
    		return redirect()->route('Author')->with('success',"sucess-fully updated !");
    }
    public function delete($id){
    	DB::table('authors')->delete(['id'=>$id]);
    	return redirect()->route('Author');
    }
    public function getauthor(){
    	
    }
}
