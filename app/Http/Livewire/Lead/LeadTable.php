<?php

namespace App\Http\Livewire\Lead;

use Livewire\Component;
use Livewire\WithPagination;

use Illuminate\Support\Facades\Auth;

use App\Models\Lead;

class LeadTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';

    public function updateSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $leads = Lead::search($this->search)->where('user_id',Auth::user()->id)->orderBy('created_at','desc')->paginate($this->perPage);

        return view('livewire.lead.lead-table',[
            'leads' => $leads
        ]);
    }
}
