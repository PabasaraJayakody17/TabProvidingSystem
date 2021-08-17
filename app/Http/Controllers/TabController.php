<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TabRequest;
use Illuminate\Support\Facades\Auth;

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
       /* $data = new TabRequest([
           // 'userId' => $request->get('userId'),
            'student_or_teacher' => $request->get('student_or_teacher'),
            'grade' => $request->get('grade'),
            'telNo' => $request->get('telNo'),
            'emailAddress' => $request->get('emailAddress'),
            'postalAddress' => $request->get('postalAddress'),
            'reason' => $request->get('reason')
        ]);
        $data->save();*/
        $request->validate([
            'student_or_teacher' => 'required',
            'grade' => 'required|min:1',
            'telNo' => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9',
            'postalAddress' => 'required|min:3',
            'reason' =>'required|min:3',
        ]);

        $data = TabRequest::orderBy('id', 'DESC')->pluck('id');
        error_log($data);
        $data = TabRequest::where('id',$data)->update([
                 'userId' => auth()->user()->id,
                 'student_or_teacher' => $request->get('student_or_teacher'),
                 'grade' => $request->get('grade'),
                 'telNo' => $request->get('telNo'),
                 'postalAddress' => $request->get('postalAddress'),
                 'reason' => $request->get('reason')
            ]);
        // TabRequest::create([
        //      'userId' => auth()->user()->id,
        //      'student_or_teacher' => $request->get('student_or_teacher'),
        //      'grade' => $request->get('grade'),
        //      'telNo' => $request->get('telNo'),
        //      'postalAddress' => $request->get('postalAddress'),
        //      'reason' => $request->get('reason')
        // ]);
        return redirect()->route('tab.viewrequest')->with('success','Data have been successfully inserted');
    }

    public function view()
    {
        $data = TabRequest::where('userId',Auth::user()->id)->get();
       // $data = TabRequest::all();
        return view('tab.viewrequest', compact('data'));
    }

    public function edit($id)
    {

        $data = TabRequest::findOrFail($id);
        return view('tab.editrequest', compact('data'));
    }

    public function update($id,Request $request)
    {
       /* $data = TabRequest::find($id);
       // $data->name = $request->get('name');
        $data->student_or_teacher = $request->get('student_or_teacher');
        $data->grade = $request->get('grade');
        $data->telNo = $request->get('telNo');
        $data->emailAddress = $request->get('emailAddress');
        $data->postalAddress = $request->get('postalAddress');
        $data->reason = $request->get('reason');
        $data->save();*/
       // dd($request->all());
       $request->validate([
        'student_or_teacher' => 'required',
        'grade' => 'required|min:1',
        'telNo' => 'required|regex:/[0-9]/|not_regex:/[a-z]/|min:9',
        'postalAddress' => 'required|min:3',
        'reason' =>'required|min:3',
    ]);
        TabRequest::findOrFail($id)->update($request->all());

       return redirect()->route('tab.viewrequest')->with('success','Data have been successfully inserted');
    }

    public function destroy($id)
    {
        TabRequest::findOrFail($id)->delete();
       // $data = TabRequest::find($id);
       // $data->delete();
        return redirect()->route('tab.viewrequest')->with('success','Data have been successfully deleted');
    }
    public function updateTabStatus($userId){

        User::whereId($userId)->update([
           'tab_status' => 1
       ]);
           return redirect()->route('tab.viewrequest')->with('success','Your tab request successfully added');

    }
}
