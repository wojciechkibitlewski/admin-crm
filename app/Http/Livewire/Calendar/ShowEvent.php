<?php

namespace App\Http\Livewire\Calendar;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Auth;

use App\Models\Lead;


class ShowEvent extends ModalComponent
{
    public $lead_id;
    

    protected $listeners = ['openModal'];

    public function openModal()
    {

        
    }

    public function render()
    {
        
        return view('livewire.calendar.show-event');
    }
}
