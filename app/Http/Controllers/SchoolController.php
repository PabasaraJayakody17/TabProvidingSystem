<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\School;
use App\Models\TabRequest;
// use Livewire\component;

class SchoolController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school = School::get();
        return view('admin.schoolinfo')->with(compact('school'));
       //$schools = School::latest()->paginate(5);
        //return view('admin.schoolinfo',compact('admin'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createschool');
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
            'schoolId' => 'required',
            'schoolType' => 'required',
            'schoolcategory' => 'required',
            'province' => 'required',
            'district' => 'required',
            'zonalEducationOffice' => 'required',
            'educationDivision' => 'required',
            'schoolName' => 'required',
            'address' => 'required',
            'telNo' => 'required',
            'email' => 'required',
        ]);

        School::create($request->all());
        //return view('admin.schoolinfo');
         return redirect()->route('admin.schoolinfo')->with('add','Record Added Successfully.');
        //return redirect()->route('admin.schoolinfo')->with('success','Created Successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

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
        $data = School::findOrFail($id);
        return view('admin.editschool',compact('data'));
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
        School::findOrFail($id)->update($request->all());
        return redirect()->route('admin.schoolinfo')->with('add','Record Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        School::findOrFail($id)->delete();
        return redirect()->route('admin.schoolinfo')->with('add','Record Deleted.');
    }

    public function select_district()
    {

        $school = School::all()->unique('district');
        error_log($school);

        return view('tab.choosedistrict', compact('school'));
    }

    public function select_zone(Request $request)
    {
        $d = $request -> district;
        $data = TabRequest::create($request->all());

        $school = School::where('district',$d)->get()->unique('zonalEducationOffice');

        return view('tab.choosezone', compact('school'));
    }



    public function select_school(Request $request)
    {
        // $data = request()->except(['_token']);
        $d = $request ->zonalEducationOffice;
        $data = TabRequest::orderBy('id', 'DESC')->pluck('id');
        $zone_data = TabRequest::orderBy('id', 'DESC')->pluck('zonalEducationOffice');


        $data = TabRequest::where('id',$data)->update($request->except(['_token']));
        $school = School::where('zonalEducationOffice',$d)->get()->unique('schoolName');

        return view('tab.chooseschool', compact('school'));
    }

    public function save_school(Request $request)
    {
        $d = request()->except(['_token']);
        $data = TabRequest::orderBy('id', 'DESC')->pluck('id');
        error_log($data);

        $data = TabRequest::where('id',$data)->update($request->except(['_token']));


        return redirect()->route('tab.addrequest')->with('success','Data have been successfully inserted');
    }


 }
