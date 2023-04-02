<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Lot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lots = DB::table('lots')
            ->groupBy('lots.id')
            ->get();
        return view('welcome', [
            'lots' => $lots,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('categories')
            ->groupBy('categories.id')
            ->get();
        return view('lotcreate', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $lot = new Lot();
        $lot->name = $request->name;
        $lot->description = $request->description;
        $lot->save();
        $lot->categories()->sync($request->categories);
        return redirect()->route('lot.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lot $lot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lot $lot)
    {
        $categories = DB::table('categories')
            ->get();
        return view('lotedit', [
            'lot' => $lot,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lot $lot)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        $lot->name = $request->name;
        $lot->description = $request->description;
        $lot->save();
        $lot->categories()->sync($request->categories);
        return redirect()->route('lot.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lot $lot)
    {
        $category = new Category();
        $lot->categories()->detach($category->id);
        $lot->delete();
        return redirect()->route('lot.index');
    }
}
