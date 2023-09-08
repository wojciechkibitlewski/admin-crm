<?php

namespace App\Http\Livewire\Client;

use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

use App\Models\Client;

class ClientTable extends Component
{
    use WithPagination;

    public $perPage = 10;

    #[Url(history:true)]
    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $clients = Client::search($this->search)->where('user_id',Auth::user()->id)->orderBy('created_at','desc')->paginate($this->perPage);

        return view('livewire.client.client-table',[
            'clients' => $clients
        ]);
    }
}

