<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Drink;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use mysql_xdevapi\BaseResult;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Brand::all()->toArray();
        $brands =Brand::all();
        return view("brands.index")->with(['brands'=>$brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("brands.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brands =$request->input('brand');
        $founder =$request->input('founder');
        $country =$request->input('country');

        Brand::create(
            [
                'brand'=>$brands,
                'founder'=>$founder,
                'country'=>$country
            ]
        );
        return redirect('brands');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brands =Brand::findOrFail($id);
        return view("brands.show")->with(['brand'=>$brands]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand =Brand::all()->sortBy('id');
        $brands =Brand::findOrFail($id);
        return view('brands.edit')->with(['brand'=>$brands,'brands'=>$brand]);
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
        $brand = Brand::findOrFail($id);
        $brand->brand =$request->input('brand');
        $brand->founder =$request->input('founder');
        $brand->country =$request->input('country');
        $brand->save();
        return redirect('brands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brands = Brand::findOrFail($id);
        $brands->delete();
        return redirect("brands");
    }
    public function UScountry()
    {
        $brands = Brand::UScountry('美國')->get();
        return view('brands.index',['brands'=>$brands]);
    }
    public function UKcountry()
    {
        $brands = Brand::UKcountry('英國')->get();
        return view('brands.index',['brands'=>$brands]);
    }
    public function TWcountry()
    {
        $brands = Brand::TWcountry('台灣')->get();
        return view('brands.index',['brands'=>$brands]);
    }

    public function api_update(Request $request)
    {
        $brand =Brand::find($request->input('id'));
        if($brand == null)
        {
            return response()->json([
                'status'=>0,
            ]);
        }
        $brand->brand = $request->input('brand');
        $brand->founder = $request->input('founder');
        $brand->country = $request->input('country');

        if ($brand->save())
        {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }

    public function api_delete(Request $request)
    {
        $brand = Brand::find($request->input('id'));

        if ($brand == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($brand->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }
    }
    public function api_brands()
    {
        return Brand::all();
    }
}
