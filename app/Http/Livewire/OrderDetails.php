<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;

use Livewire\Component;
use App\Models\Lead;


class OrderDetails extends Component
{
    public $orderId;

    protected $listeners = ['openOrderModal', 'closeOrderModal'];

    public function openOrderModal()
    {
        $this->dispatchBrowserEvent('openOrderModal');
    }

    public function closeOrderModal()
    {
        $this->dispatchBrowserEvent('closeOrderModal');
    }

    public function loadOrderDetails($orderId)
    {
        // Tutaj załaduj dane zamówienia na podstawie $orderId
        $this->order = Lead::where('user_id',Auth::user()->id)->where('id', $orderId)->first();

        // Wyemituj zdarzenie, które otworzy modal
        $this->emit('openOrderModal');
    }

    public function render()
    {
        $order = [
            'title'=> 'A',
            'executionDate' => 'A',
        ];
        
        return view('livewire.order-details');
    }
}
