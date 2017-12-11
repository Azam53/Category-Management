<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use Illuminate\Support\Facades\Redirect;
use DB;

class ViewController extends Controller
{
    public function index(){
               
		  $category_parent = Category::where('parent',0)->orderBy('order', 'asc')->get();
                  $category_child = Category::where('parent','!=',0)->get();
            return view('view.index' , compact('category_parent','category_child'));
     }

   public function create(){
                 
                 $category_parent = Category::where('parent',0)->lists('name', 'id');
                
		return view('view.create',compact('category_parent'));
	}

// function for searching with id , name and also showing submenu by parent menu id
   public function search_by(Request $request){
                 
                 $search_term = $request->search_term;
                 $category_child = array();
                 
                 if(is_numeric($search_term)){
                    $category = Category::where('id',$search_term)->get();
                    $category_child = Category::where('parent',$search_term)->get();
                 }
                 else{
                     $category = Category::where('name',$search_term)->get();
                 }
                
		return view('view.search_index',compact('category','category_child'));
	}

   public function edit($id){
                 
                 $category = Category::find($id);
                 $category_parent = Category::where('parent',0)->lists('name', 'id');
                
		return view('view.edit',compact('category','category_parent'));
	}


    public function store(Request $request){
		
                $category = new Category;
                $category->name = $request->name;
                $category->parent = $request->parent;
                $category->order = $request->order;
                $category->created_at = date('Y-m-d');
                                
                $category->save();

                
		return redirect('categorylist');
	}

   public function update(Request $request){
		
                $id = $request->id;
                $category = Category::find($id);
                $category->name = $request->name;
                $category->parent = $request->parent;
                $category->order = $request->order;
                $category->created_at = date('Y-m-d');
                                
                $category->save();

                
		return redirect('categorylist');
	}

   public function destroy($id){
		 
                    $category = Category::find($id);
                    $category->delete();

                    DB::table('category')->where('parent', '=', $id)->delete();
                   
		return redirect()->back();
	} 
                
               
}
