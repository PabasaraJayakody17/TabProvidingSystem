<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class profileController extends Controller
{
    //
    public function view()
    {
       // $data = User::where('userId',Auth::user()->id)->get();
       // $data = TabRequest::all();
       // return view('user.profileView', compact('data'));
       return view('profile');
    }
    public function update($id,Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required |email',
        ]);

        $user = User::find($id);
        if($user) {
            $user->name= $request->name;
            $user->email= $request->email;
            $user->save();
        }
        //User::findOrFail($id)->update($request->all());
       // dd($request->name);
     return redirect()->route('user.profileView')->with('success','Your profile successfully updated');
    }
}
