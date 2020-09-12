<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('backend.categories.index',compact('categories'));
       

    }
        
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories=Category::all();
        return view("backend.categories.create");
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dd($request);
         $request->validate([
            "category_name" => 'required',
            "photo" => 'required',
        ]);

        //

        //If include file,upload file
        $imageName = time().'-'.$request->photo->extension();
        $request->photo->move(public_path('backend/categoryimg'),$imageName);
        // ပုံပတ်လမ်းကြောင်းသိမ်း
        $path = 'backend/categoryimg/'.$imageName;
        //
        //Data insert
        $category = new Category;
        
        $category->category_name = $request->category_name;
        $category->photo = $path;

        $category->save();

        //redirect
        return redirect()->route('categories.index');


        }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
         //$request က edit form  ထဲက data ပါလာ
         $request->validate([
            "category_name" => 'required',
            "photo" => 'sometimes',
            "oldphoto" => 'required',
        ]);

        //file upload, if data
        if($request->hasFile('photo')){
            $imageName = time().'-'.$request->photo->extension();

                    $request->photo->move(public_path('backend/categoryimg'),$imageName);

                            $path = 'backend/categoryimg/'.$imageName;

        }else{
            $path=$request->oldphoto;
        }

        //data update
        $category->category_name = $request->category_name;
        $category->photo = $path;
        $category->save();

        //redirect
        return redirect()->route('categories.index'); 
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Category::find($id);
        $post->delete();
        return redirect()->back();    
    }
}
