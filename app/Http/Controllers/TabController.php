<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TabRequest;

class TabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('tab.addrequest', compact('user'));
        //return view('tab.addrequest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new TabRequest([
            'userId' => $request->get('userId'),
            'student_or_teacher' => $request->get('student_or_teacher'),
            'grade' => $request->get('grade'),
            'telNo' => $request->get('telNo'),
            'emailAddress' => $request->get('emailAddress'),
            'postalAddress' => $request->get('postalAddress'),
            'reason' => $request->get('reason')
        ]);
        $data->save();
        return redirect()->route('tab.addrequest')->with('success','Data have been successfully inserted');
    }

    public function view()
    {
        $data = TabRequest::all();
        return view('tab.viewrequest', compact('data'));
    }

    public function edit($id)
    {
        $data = TabRequest::find($id);
        return view('tab.editrequest', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = TabRequest::find($id);
        $data->name = $request->get('name');
        $data->student_or_teacher = $request->get('student_or_teacher');
        $data->grade = $request->get('grade');
        $data->telNo = $request->get('telNo');
        $data->emailAddress = $request->get('emailAddress');
        $data->postalAddress = $request->get('postalAddress');
        $data->reason = $request->get('reason');
        $data->save();
        return redirect()->route('tab.viewrequest')->with('success','Data have been successfully inserted');
    }

    public function destroy($id)
    {
        $data = TabRequest::find($id);
        $data->delete();
        return redirect()->route('tab.deleterequest')->with('success','Data have been successfully deleted');
    }
}
