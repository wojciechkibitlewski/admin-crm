<?php

namespace App\Http\Livewire\Calendar;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Calendar;
use App\Models\Lead;
use App\Models\Todo;

class Schelude extends Component
{
    public $days=[];
    public $perPage = 30;
    public $endDate;
    public $startDate;

    public $currentMonth;
    public $currentYear;
    public $prefix;
    public $leadsToModal;
    public $showLeadModal;

    protected $listeners = ['showLead'];

    public function mount()
    {
        $this->currentMonth = date('m');
        $this->currentYear = date('Y');
        $this->leadsToModal = '';
    }

    public function showLead($prefix)
    {
        $this->prefix = $prefix;
        //dd($prefix);
        $this->leadsToModal = Lead::where('prefix', $this->prefix)
            ->where('user_id',Auth::user()->id)
            ->first();
        
        $this->showLeadModal=true;
            
    }
    public function updatedSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        
        $this->days=[];
        //$todayMonth = date('m');
        //$startLeadDate = Lead::where('user_id',Auth::user()->id)->min('executionDate');
        //$endLeadDate = Lead::where('user_id',Auth::user()->id)->max('executionDate');
        
        //$startTodoDate = Todo::where('user_id',Auth::user()->id)->min('date');
        //$endTodoDate = Todo::where('user_id',Auth::user()->id)->max('date');

        //$startDate = ($startLeadDate >= $startTodoDate ? $startTodoDate : $startLeadDate);
        //$endDate = ($endLeadDate <= $endTodoDate ? $endTodoDate : $endLeadDate);

        //$howManyDays=(strtotime($endDate)-strtotime($startDate))/86400;
        //dd($howManyDays);
        $dateC = ''.$this->currentYear.'-'.$this->currentMonth.'-01';
        $this->startDate = date('Y-m-d', strtotime($dateC));

        for ($i = 0; $i < $this->perPage ; $i++) {
            $this->days[]  = date('Y-m-d', strtotime($this->startDate .' +'.$i.' day'));
        }

        return view('livewire.calendar.schelude',[
            'days' => $this->days,
            'leadsToModal' => $this->leadsToModal,
        ]);
    }

   
}
