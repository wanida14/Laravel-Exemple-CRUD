<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custormer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $custormers = Custormer::all();

        return view('customers', compact('custormers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $custormer = new Custormer;
        $custormer->name = $request->name;
        $custormer->address = $request->address;
        $custormer->phone = $request->phone;
        $custormer->save();

        $custormers = Custormer::all();

        return view('customers', compact('custormers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $custormer = Custormer::find($id);

        return view('custormer_show', compact('custormer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $custormer = Custormer::find($id);

        return view('customer_edit', compact('custormer'));
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
        $custormer = Custormer::find($id);
        $custormer->name = $request->name;
        $custormer->address = $request->address;
        $custormer->phone = $request->phone;
        $custormer->save();

        $custormers = Custormer::all();
        
        return view('customers', compact('custormers'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $custormer = Custormer::find($id);
        $custormer->delete();

        $custormers = Custormer::all();
        
        return view('customers', compact('custormers'));
    }
}
