<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes= Home::orderBy('created_at', 'ASC')->paginate(20);
        return view('admin.pages.home.index',compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.home.create');
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
            'name'=>'required',
            'description' => 'required',
            'status' => 'required|in:active,inactive',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5048',
            'status'=>'required|in:'.Home::ACTIVE_STATUS.','.Home::INACTIVE_STATUS,
        ]);
    
        $data = new Home();
        $data->name = $request->input('name');
        $data->description = $request->input('description');
        $data->status = $request->input('status');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $path ='images/home';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;
        }


        $data->save();
        session()->flash('success', 'Home Created Successfully');
        return redirect()->route('admin.home.index');
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
        $data = Home::findOrFail($id);
        return view('admin.pages.home.edit',compact('data'));
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
        $data = Home::findOrFail($id);
        $data->name = $request->input('name');
        $data->description = $request->input('description');
        $data->status = $request->input('status');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'images/home';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $new_image = $path . '/' . $file_name;
            
            if (file_exists(public_path($data->image))) {
                unlink(public_path($data->image)); // Delete the previous image
            }
            $data->image = $new_image;
        }

        $request->validate([
            'name'=>'required',
            'status'=>'required|in:'.Home::ACTIVE_STATUS.','.Home::INACTIVE_STATUS,

        ]);

        $data->save();
        session()->flash('success', 'Data Updated Successfully');
        return redirect()->route('admin.home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Home::findOrFail($id);

    // Delete the image file if it exists
    if (file_exists(public_path($data->image))) {
        unlink(public_path($data->image));
    }

    $data->delete();

    session()->flash('success', 'Home Deleted Successfully');
    return redirect()->route('admin.home.index');
    }
}
