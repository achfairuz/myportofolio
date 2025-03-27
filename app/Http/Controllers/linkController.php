<?php

namespace App\Http\Controllers;

use App\Models\link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class linkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|string',
            'image' => 'required|string|max:255',
            'category' => 'required|string|max:255',

        ]);

        link::create([
            'title' => $validatedData['title'],
            'link' => $validatedData['link'],
            'image' => $validatedData['image'],
            'category' => $validatedData['category'],

        ]);

        return redirect()->route('dashboard')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|string',
            'image' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);


        $data = link::findOrFail($id);
        $data->title = $request->input('title');
        $data->image = $request->input(key: 'image');
        $data->link = $request->input('link');
        $data->category = $request->input('category');

        $data->save();


        return redirect()->route('dashboard')->with('success', 'Data berhasil diupdate!');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = link::findOrFail($id);

        $data->delete();

        return redirect()->route('dashboard')->with('success', 'Data berhasil dihapus!');
    }
}
