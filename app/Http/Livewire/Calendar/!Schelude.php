<?php

namespace App\Http\Livewire\Calendar;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Calendar;
use App\Models\Lead;

class Schelude extends Component
{
    public $days=[];
    public $perPage;
    public $endDate;
    public $startDate;
   
    protected $listeners = [
        'nextMonth' => 'loadNextMonth',
        'prevMonth' => 'loadPrevMonth',
    ];

    public $loadNextMonthFlag = false;
    public $loadPrevMonthFlag = false;


    public function mount()
    {
        $this->perPage = 21;
    }

    public function loadPrevMonth()
    {
       
    }

    public function loadNextMonth()
    {
        if (!$this->loadNextMonthFlag) {
            $this->startDate = date('Y-m-d', strtotime($this->endDate .' +1 day'));

            for ($i = 0; $i < $this->perPage ; $i++) {
                $this->days[]  = date('Y-m-d', strtotime($this->startDate .' +'.$i.' day'));
            }
            $this->endDate = end($this->days);

            $this->loadNextMonthFlag = true;
        }

    }   

    
    public function render()
    {
        $this->startDate = date('Y-m-d', strtotime(' -'.$this->perPage.' day'));

        if($this->endDate < $this->startDate){
            for ($i = 0; $i < $this->perPage*2 ; $i++) {
                $this->days[]  = date('Y-m-d', strtotime($this->startDate .' +'.$i.' day'));
            }
            $this->endDate = end($this->days);
        }

        if ($this->loadNextMonthFlag) {
            $this->loadNextMonthFlag = false;
        }
        if ($this->loadPrevMonthFlag) {
            $this->loadPrevMonthFlag = false;
        }

        return view('livewire.calendar.schelude',[
            'days' => $this->days,
        ]);
    }

   
}
