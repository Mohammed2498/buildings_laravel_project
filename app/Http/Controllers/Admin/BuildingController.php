<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Building;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buildings = Building::all();
        return view('buildings.index', ['buildings' => $buildings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buildings = Building::all();
        $building = new Building();
        return view('buildings.create', [
            'buildings' => $buildings,
            'building' => $building
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate($this->rules());
        $image = $request->file('image');
        $data = $request->all();
        if ($image->isValid()) {
            $image_url = $image->store('buildings', 'public');
            $data['image'] = $image_url;
        }
        Building::create($data);
        //Building::create($request->all());
        return redirect()->route('buildings.index')
            ->with('success', 'تم اضافة البرج');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building)
    {
        //
        //$building = Building::findOrFail($id);
        $building->delete();
        Storage::disk('public')->delete($building->image);
        return redirect()->route('buildings.index')
            ->with('success', 'تم الحذف بنجاح');
    }

    protected function rules()
    {
        return [
            'image' => ['nullable'],
        ];
    }
}
