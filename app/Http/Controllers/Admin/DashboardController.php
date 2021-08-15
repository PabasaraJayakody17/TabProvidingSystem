<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\School;
use App\Models\Tablist;
use App\Models\TabRequest;
class DashboardController extends Controller
{
    //

    public function index(){

       // $users = User::all();
       $users= TabRequest::all();
       $schools= School::all();
       $tabs=Tablist::all();
        return view('admin.dashboard', compact('users','schools','tabs'));
    }
    public function delete($userId){
        User::findOrFail($userId)->delete($userId);
        return back()->with('status','User Removed');
    }
    public function updateTabStatus($userId){
    
     User::whereId($userId)->update([
        'tab_status' => 2
    ]);
        return back()->with('status','Tab Request Changed to Accepted');
    }
    public function updateTabStatusBack($userId){
    
        User::whereId($userId)->update([
           'tab_status' => 1
       ]);
           return back()->with('status','Tab Request Changed to Requested');
    }
  
    public function  updateTabStatusToZero($userId){
    
        User::whereId($userId)->update([
           'tab_status' => 0
       ]);
           return back()->with('status','Tab Request Changed to Not Requested');
    }
}
