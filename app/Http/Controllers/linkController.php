<?php

namespace App\Http\Controllers;

use App\Models\link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class linkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show_detail($slug)
    {
        $data = link::where('slug', $slug)->firstOrFail();
        if (!$data) {
            return redirect()->route(404)->with('error', 'Data tidak ditemukan!');
        }
        return view('detail_porto', ['data' => $data]);
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
            'description' => 'nullable|string',
        ]);

        $slug = Str::slug($request->input('title'));

        link::create([
            'title' => $validatedData['title'],
            'link' => $validatedData['link'],
            'image' => $validatedData['image'],
            'category' => $validatedData['category'],
            'description' => $validatedData['description'] ?? null,
            'slug' => $slug,

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
            'description' => 'nullable|string',
        ]);

        $slug = Str::slug($request->input('title'));
        $request->merge(['slug' => $slug]);


        $data = link::findOrFail($id);
        $data->title = $request->input('title');
        $data->image = $request->input(key: 'image');
        $data->link = $request->input('link');
        $data->category = $request->input('category');
        $data->description = $request->input('description', null);
        $data->slug = $slug;

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
