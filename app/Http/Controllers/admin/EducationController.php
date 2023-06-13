<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education= Education::orderBy('created_at', 'ASC')->paginate(20);
        return view('admin.pages.education.index',compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.education.create');
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
            'company' => 'required',
            'location' => 'required',
            'description' => 'required',
            'status'=>'required|in:'.Education::ACTIVE_STATUS.','.Education::INACTIVE_STATUS,
        ]);
    
        $data = new Education();
        $data->title = $request->input('title');
        $data->company = $request->input('company');
        $data->location = $request->input('location');
        $data->description = $request->input('description');
        $data->status = $request->input('status');


        $data->save();
        session()->flash('success', 'education Created Successfully');
        return redirect()->route('admin.education.index');
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
        $data = Education::findOrFail($id);
        return view('admin.pages.education.edit',compact('data'));
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
        $data = Education::findOrFail($id);
        $data->title = $request->input('title');
        $data->company = $request->input('company');
        $data->location = $request->input('location');
        $data->description = $request->input('description');
        $data->status = $request->input('status');

        $request->validate([
            'title'=>'required',
            'company' => 'required',
            'location' => 'required',
            'description' => 'required',
            'status'=>'required|in:'.Education::ACTIVE_STATUS.','.Education::INACTIVE_STATUS,

        ]);

        $data->save();
        session()->flash('success', 'Data Updated Successfully');
        return redirect()->route('admin.education.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Education::findOrFail($id);

    $data->delete();

    session()->flash('success', ' Deleted Successfully');
    return redirect()->route('admin.education.index');
    }
}
