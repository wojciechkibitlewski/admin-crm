<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\Activity as Activities;

class Activity extends Component
{
    public $records;

    public function render()
    {
        $this->records = Activities::select('*')->where('user_id',Auth::user()->id)->orderBy('created_at','desc')->limit(15)->get();
        return view('livewire.activity');
    }
}
