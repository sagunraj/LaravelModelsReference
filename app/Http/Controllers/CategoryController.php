<?php

namespace App\Http\Controllers;
use App\Model\Category;
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
        return view('category/index',[
            "categories"=>$categories
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Category::find($id);
        return response()->json($data, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::findorfail($id);
        /*if(!$category)
            abort(404); alternative of the above line with customizable status codes */
        $category->delete();
        $data=Category::all();
        return response()->json($data, 200);
    }

    public function updateData($id, $name){
        $category = Category::findorfail($id);
        $category->name=$name;
        $category->save();

        $data = Category::findorfail($id);
        return response()->json($data, 200);
    }

    public function updateName($name, $names){
        $category = Category::where('name', $name)->first();
        $category -> name = $names;
        $category -> save();

        $data = Category::where('name', $names)->first();
        return response()->json($data, 200);
    }
}
