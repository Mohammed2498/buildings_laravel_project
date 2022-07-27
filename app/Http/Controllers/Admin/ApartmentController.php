<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\Building;
use App\Models\User;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        // $apartments = Apartment::leftJoin(
        //     'buildings',
        //     'buildings.id',
        //     '=',
        //     'apartments.building_id'
        // )->select('apartments.*', 'buildings.name as building_name')->get();
        $apartments = Apartment::with('building')->get();
        $apartments = Apartment::paginate(5);
        return view('apartments.index', [
            'apartments' => $apartments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $apartent = new Apartment();
        $buildings = Building::all();
        $users = User::all();
        return view(
            'apartments.create',
            [
                'apartment' => $apartent,
                'buildings' => $buildings,
                'users' => $users
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules(), $this->messages());
        Apartment::create($request->all());
        return redirect()->route('apartments.index')
            ->with('done', 'تمت الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        $users = User::all();
        $buildings = Building::all();
        return view(
            'apartments.edit',
            compact('apartment', 'buildings', 'users')
        );
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartment $apartment)
    {
        $request->validate($this->rules(), $this->messages());
        $apartment->update($request->all());
        return redirect()->route('apartments.index')
            ->with('done', 'تم التعديل  بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        $apartment->delete();
        return redirect()->back()->with('done', 'تم الحذف بنجاح');
    }

    protected function rules()
    {
        return [
            'number' => ['required', 'unique:apartments', 'numeric'],
            'owner' => ['required'],
            'building_id' => ['required'],
            // 'user_id' => ['required']
        ];
    }

    protected function messages()
    {
        return [
            // 'owner.regex' => 'يجب ان يكون اسم',
            'required' => 'هذا الحقل مطلوب',
            'number.required' => 'رقم الشقة مطلوب',
        ];
    }
}
