<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index()
    {
        return Business::all();
    }
 
    public function show($id)
    {
        return Business::find($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validated();
        //return Business::create($request->all());
    $student = new Business;
    $student->name = $request->name;
    $student->price = $request->price;
    $student->city = $request->city;
    $student->save();

    return response()->json([
        "message" => "business record created"
    ], 201);
  
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validated();
        $business = Busniess::findOrFail($id);
        $busniess->update($request->all());

        return $business;
    }

    public function delete(Request $request, $id)
    {
        $business = Business::findOrFail($id);
        $business->delete();

        return 204;
    }
}
