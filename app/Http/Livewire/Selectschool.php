<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\School;

class Selectschool extends Component
{
    public $selectedDistrict = null;
    public $selectedzones = null;
    public $zones = null;

    public function render()
    {
        $school = School::all();


        return view('livewire.selectschool', compact('school'));
    }

    public function selectedzones($schoolId)
    {
        $this->zones = School::where('schoolId', $schoolId)->get();
    }
}
