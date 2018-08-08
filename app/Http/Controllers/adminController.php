<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kanohubs;
use App\Http\Controllers\Controller;
class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $hubs = Kanohubs::Latest()->get();
        $hubs = Kanohubs::paginate(9);

        return view ('admin.index', compact('hubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $hubs = new \App\Kanohubs;
        $hubs->hubname=$request->get('hubname');
        $hubs->location=$request->get('location');
        $hubs->founder=$request->get('founder');
        $hubs->description=$request->get('description');
        $hubs->website=$request->get('website');
        $hubs->email=$request->get('email');

        $hubs->save();

        return redirect ('admin');
        
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
    public function edit($id)
    {
        $hubs = \App\Kanohubs::find($id);

        return view ('admin.edit', compact('hubs', 'id'));
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
     $hubs = \App\Kanohubs::find($id);
     $hubs->hubname = $request->get('hubname');
     $hubs->location = $request->get('location');
     $hubs->founder = $request->get('founder');
     $hubs->description = $request->get('description');
     $hubs->website = $request->get('website');
     $hubs->email = $request->get('email');

     $hubs->save();
     return redirect ('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hubs = \App\Kanohubs::find($id);
        $hubs->delete();

        return redirect ('admin');
    }
}
