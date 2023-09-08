<?php

namespace App\Http\Livewire\Product;

use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;

class ProductTable extends Component
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
        $products = Product::search($this->search)->where('user_id',Auth::user()->id)->orderBy('name','asc')->paginate($this->perPage);

        return view('livewire.product.product-table',[
            'products' => $products
        ]);
    }
}
