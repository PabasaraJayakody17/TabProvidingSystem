<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
class profileController extends Controller
{
    //
    public function viewDashboard(){
        return view('userDashboard');
    }
    public function view()
    {
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
       
     return redirect()->route('user.profileView')->with('success','Your profile successfully updated');
    }
    public function changePassword(){
        return view('changePassword');
    }
    public function updatePassword(Request $request){
        $request->validate([
            'oldPassword' => 'required|min:8|max:15',
            'newPassword' => 'required|min:8|max:15',
            'confirmPassword' => 'required|same:newPassword',
        ]);

        $current_user=auth()->user();
        if(Hash::check($request->oldPassword,$current_user->password)){

            $current_user->update([
                'password'=>bcrypt($request->newPassword)
            ]);
            return redirect()->back()->with('success','Password sucessfully updated.');
        }else{
            return redirect()->back()->with('error','Old Password does not matched.');
        }
    }

}
