<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\Client;

class Search extends Component
{
    public function render()
    {
        $records = Client::where('user_id',Auth::user()->id)->orderBy('created_at')->paginate(10);

        return view('livewire.clients.search', [
            'records' => $records
        ]);
    }
}
