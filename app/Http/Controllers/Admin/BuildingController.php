<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Building;
use Exception;
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
        $buildings = Building::paginate(4, '*', 'p');
        return view('buildings.index', ['buildings' => $buildings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $building = new Building();
        return view('buildings.create', [

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
        $request->validate($this->rules(), $this->messages());
        $image = $request->file('image');
        $data = $request->all();
        if ($request->hasFile('image')) {
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
    public function show(Building $building)
    {
        $apartments = $building->apartments;
        return view('buildings.show', [
            'building' => $building, 'apartments' => $apartments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Building $building)
    {
        //

        return view('buildings.edit', ['building' => $building]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Building $building)
    {
        //
        $request->validate($this->rules(), $this->messages());
        $image = $request->file('image');
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image_url = $image->store('buildings', 'public');
            $data['image'] = $image_url;
            Storage::disk('public')->delete($building->image);
        }
        $building->update($data);
        return redirect()->route('buildings.index')
            ->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building)
    {
        if (isset($building->image)) {
            Storage::disk('public')->delete($building->image);
        }
        $building->delete();
        //
        //$building = Building::findOrFail($id);


        return redirect()->route('buildings.index')
            ->with('success', 'تم الحذف بنجاح');
    }

    protected function rules()
    {
        return [
            'image' => ['nullable'],
            'name' => ['required'],
            'address' => ['required']

        ];
    }
    protected function messages()
    {
        return [
            'name.required' => 'اسم البرج مطلوب',
        ];
    }
}
