<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skill= Skill::orderBy('created_at', 'ASC')->paginate(20);
        return view('admin.pages.skill.index',compact('skill'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description' => 'required',
            'status'=>'required|in:'.Skill::ACTIVE_STATUS.','.Skill::INACTIVE_STATUS,
        ]);
    
        $data = new Skill();
        $data->title = $request->input('title');
        $data->description = $request->input('description');
        $data->status = $request->input('status');



        $data->save();
        session()->flash('success', 'skill Created Successfully');
        return redirect()->route('admin.skill.index');
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
        $data = Skill::findOrFail($id);
        return view('admin.pages.skill.edit',compact('data'));
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
        $data = Skill::findOrFail($id);
        $data->title = $request->input('title');
        $data->description = $request->input('description');
        $data->status = $request->input('status');

        $request->validate([
            'title'=>'required',
            'status'=>'required|in:'.Skill::ACTIVE_STATUS.','.Skill::INACTIVE_STATUS,

        ]);

        $data->save();
        session()->flash('success', 'Data Updated Successfully');
        return redirect()->route('admin.skill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Skill::findOrFail($id);

    $data->delete();

    session()->flash('success', ' Deleted Successfully');
    return redirect()->route('admin.skill.index');
    }
}
