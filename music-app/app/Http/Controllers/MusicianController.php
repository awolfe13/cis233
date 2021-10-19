<?php

namespace App\Http\Controllers;

use App\Musician;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class MusicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musicians = \App\Musician::paginate(10);
        return view('musicians.index', ['musicians'=> $musicians]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $musician = new \App\Musician;
        return view('musicians.create', ['musician' => $musician]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Musician::create($this->validatedData($request));
        return redirect()->route('musicians.index')->with('success', 'Musician was created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $musician = \App\Musician::findOrFail($id);
        return view('musicians.show', ['musician' => $musician]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $musician = \App\Musician::findOrFail($id);
        return view('musicians.edit', ['musician'=> $musician]);
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
        \App\Musician::findOrFail($id)->update($this->validatedData($request));
        return redirect()->route('musicians.index')->with('success', 'Musician was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $musician = \App\Musician::findOrFail($id);
        $musician->delete();
        
        return redirect()->route('musicians.index')->with('success', 'Musician was deleted');
    }

    private function validatedData($request) {
        return $request->validate([
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'instrument' => 'required|alpha',
            'website' => 'required'
        ]);
    }

    public function boot() {
        Paginator::useBootstrap();
    }
} //end of class