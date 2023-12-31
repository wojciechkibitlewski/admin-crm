<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\Client;

class SearchClient extends Component
{
    public $showdiv = false;
    public $showresult = false;
    public $search;
    public $records;
    public $clientDetails;

    public function searchResult(){

        if(!empty($this->search)){

            $this->records =client::where('user_id',Auth::user()->id)
                      ->select('*')
                      ->where('name','like','%'.$this->search.'%')
                      ->orderby('name','asc')
                      ->limit(5)
                      ->get();

            $this->showdiv = true;
            $this->showresult = true;
        }else{
            $this->showdiv = false;
            $this->showresult = false;


        }
    }

    public function fetchClientDetail($id = 0){

        $record = Client::where('user_id',Auth::user()->id)
                    ->select('*')
                    ->where('id',$id)
                    ->first();

        $this->search = $record->name;
        $this->clientDetails = $record;
        $this->showdiv = false;
        $this->showresult = false;

    }    

    public function render()
    {
        return view('livewire.client.search-client');
    }
}
