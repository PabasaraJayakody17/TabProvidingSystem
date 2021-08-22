<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tablist;
use File;
class TablistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tablist = Tablist::get();
        return view('admin/tablist.tabindex')->with(compact('tablist'));;
    }
    public function UserIndex()
    {
        $tablist = Tablist::get();
        return view('tab.tabdetails')->with(compact('tablist'));;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/tablist.createtab');
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
            'serialNumber' => 'required',
            'category' => 'required',
            'tabName' => 'required',
            'description' => 'required',     
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  
        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";

        }
        Tablist::create($input);
        return redirect()->route('admin.tablist')->with('success','Record Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Tablist::findOrFail($id);
        return view('admin/tablist.showtab',compact('data'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $data = Tablist::findOrFail($id);
        return view('admin/tablist.edittab',compact('data'));
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
        $request->validate([
            'serialNumber' => 'required',
            'category' => 'required',
            'tabName' => 'required',
            'description' => 'required', 
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',    
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        Tablist::findOrFail($id)->update($input);
        return redirect()->route('admin.tablist')->with('success','Record Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tablist::findOrFail($id)->delete();
        return redirect()->route('admin.tablist')->with('success','Record Deleted.');
    }
}
