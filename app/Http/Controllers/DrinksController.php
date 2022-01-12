<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Drink;
use Illuminate\Http\Request;

class DrinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$drinks = Drink::all()->toArray();
        $drinks =Drink::all()->sortBy('id');
        return view("drinks.index")->with(['drinks'=>$drinks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("drinks.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name =$request->input('name');
        $bid =$request->input('bid');
        $milliliters =$request->input('milliliters');
        $price =$request->input('price');
        $calories =$request->input('calories');

        Drink::create(
            [
                'name'=>$name,
                'bid'=>$bid,
                'milliliters'=>$milliliters,
                'price'=>$price,
                'calories'=>$calories,
            ]
        );
        return redirect('drinks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drinks =Drink::findOrFail($id);
        return view('drinks.show')->with(['drink'=>$drinks]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drinks =Drink::findOrFail($id);
        $drink =Drink::all()->sortBy('id');
        return view('drinks.edit')->with(['drinks'=>$drink,'drink'=>$drinks]);
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
        $drink = Drink::findOrFail($id);
        $drink->name =$request->input('name');
        $drink->bid =$request->input('bid');
        $drink->milliliters =$request->input('milliliters');
        $drink->price =$request->input('price');
        $drink->calories =$request->input('calories');
        $drink->save();
        return redirect('drinks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drink = Drink::findOrFail($id);
        $drink->delete();
        return redirect("drinks");
    }
    public function api_update(Request $request)
    {
        $drink = Drink::find($request->input('id'));
        if ($drink == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }
        $drink->name = $request->input('name');
        $drink->bid = $request->input('bid');
        $drink->milliliters = $request->input('milliliters');
        $drink->price = $request->input('price');
        $drink->calories = $request->input('calories');

        if ($drink->save())
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
        $drink= Drink::find($request->input('id'));

        if ($drink == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($drink->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }
    }
    public function api_drinks()
    {
        return Drink::all();
    }
}
