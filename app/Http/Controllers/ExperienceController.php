<?php

namespace App\Http\Controllers;

use App\User;
use App\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = 1;
        $user = User::findOrFail($id);
        $experiences = $user->experiences()->get();

        return view('admin.experience.index',compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'place'=> 'required',
            'description' => 'required',
            'initialdate' => 'required',
            'finaldate' => 'required'
        ];

        $data = $this->validate($request, $rules);

        $data['user_id'] = Auth()->User()->id;
        
        Experience::create($data);

        return redirect()->route('experience.index')->withFlash('Nuevo registro agregado');
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
        $experience = Experience::findOrFail($id);
        
        return view('admin.experience.edit',compact('experience'));
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
        $experience = Experience::findOrFail($id);
        $experience->fill($request->all());
        $experience->save();

        return Redirect::to('experience');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        
        $experience->delete();

        return redirect()->route('experience.index')->withFlash('El registro ha sido eliminado');
    }
}
