<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use Illuminate\Support\Facades\Validator;

class TresleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Business::all();
       /*
        $businesses = Business::all();

        return response([ 'businesses' => $businesses, 'message' => 'Retrieved successfully'], 200);
       */    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     try{
        //Set Accept and Content-Type Headers to 'application/json'
        $validated = $request->validate([
        'name' => 'required|string|min:10|max:50',
        'price' => 'required|integer|between:10000,10000000',	
        'city' => 'required|string|max:255',
     ]);

        return Business::create($request->all());
    } catch (\Illuminate\Validation\ValidationException $e ) {
        return \response($e->errors(),400);
    }

/*
      $data = $request->all();
      $validator = Validator::make($data, [
            'name' => 'required|string|min:10|max:50',
            'price' => 'required|integer|between:10000,10000000',
            'city' => 'required|string|max:255'
        ]);

        if($validator->fails()){
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $business = Business::create($data);

        return response([ 'business' => $business, 'message' => 'Created successfully'], 201);
*/    


/*    
    $b = new Business;
    $b->name = $request->name;
    $b->price = $request->price;
    $b->city = $request->city;
    $b->save();

    return response()->json([
        "message" => "business record created"
    ], 201);
*/  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $business = Business::findOrFail($id);

        return $business;
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
        //$validated = $request->validated();
        $business = Business::findOrFail($id);
        $business->update($request->all());

        return $business;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Business::destroy($id);
    }
}
