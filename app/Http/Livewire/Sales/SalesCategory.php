<?php

namespace App\Http\Livewire\Sales;

use Livewire\Component;
use Livewire\WithPagination;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Lead;
use App\Models\ProductLead;

class SalesCategory extends Component
{
    use WithPagination;

    public $currentYear;

    public function mount()
    {
        // $this->currentMonth = date('m');
        $this->currentMonth = date('m');
        $this->currentYear = date('Y');
    }

    public function render()
    {
        $month = [
            ['name' => 'January', 'value'=> '01'],
            ['name' => 'February', 'value'=> '02'],
            ['name' => 'March', 'value'=> '03'],
            ['name' => 'April', 'value'=> '04'],
            ['name' => 'May', 'value'=> '05'],
            ['name' => 'June', 'value'=> '06'],
            ['name' => 'July', 'value'=> '07'],
            ['name' => 'August', 'value'=> '08'],
            ['name' => 'September', 'value'=> '09'],
            ['name' => 'October', 'value'=> '10'],
            ['name' => 'November', 'value'=> '11'],
            ['name' => 'December', 'value'=> '12'],
        ];
        $year = [
            ['name' => '2013', 'value'=> '2013'],
            ['name' => '2014', 'value'=> '2014'],
            ['name' => '2015', 'value'=> '2015'],
            ['name' => '2016', 'value'=> '2016'],
            ['name' => '2017', 'value'=> '2017'],
            ['name' => '2018', 'value'=> '2018'],
            ['name' => '2019', 'value'=> '2019'],
            ['name' => '2020', 'value'=> '2020'],
            ['name' => '2021', 'value'=> '2021'],
            ['name' => '2022', 'value'=> '2022'],
            ['name' => '2023', 'value'=> '2023'],
            ['name' => '2024', 'value'=> '2024'],
            ['name' => '2025', 'value'=> '2025'],
            ['name' => '2026', 'value'=> '2026'],
            ['name' => '2027', 'value'=> '2027'],
            ['name' => '2028', 'value'=> '2028'],
            ['name' => '2029', 'value'=> '2029'],
            ['name' => '2030', 'value'=> '2030'],
        ];
        
        // $data = Lead::select(
        //     DB::raw('SUM(leadValue) as sumLeadValue'),
        //     DB::raw('SUM(advanceValue) as sumAdvanceValue')
        // )
        // ->where('user_id', Auth::user()->id)
        // ->whereYear('executionDate', $this->currentYear)
        // ->whereMonth('executionDate', $this->currentMonth)
        // ->first();

        $data = DB::table('lead_products')
            ->join('leads', 'leads.id', '=', 'lead_products.lead_id')
            ->join('products', 'lead_products.product_id', '=', 'products.id')
            ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->select(
                DB::raw('SUM(lead_products.product_price * lead_products.quant) as sumLeadValue'),
            )
            ->where('leads.user_id', Auth::user()->id)
            ->whereYear('leads.executionDate', $this->currentYear)
            ->whereMonth('leads.executionDate', $this->currentMonth)
            ->first(); 


        $leads = DB::table('lead_products')
            ->join('leads', 'leads.id', '=', 'lead_products.lead_id')
            ->join('products', 'lead_products.product_id', '=', 'products.id')
            ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->select(
                'product_categories.category',
                DB::raw('SUM(lead_products.product_price * lead_products.quant) as totalValue'),
            )
            ->where('leads.user_id', Auth::user()->id)
            ->whereYear('leads.executionDate', $this->currentYear)
            ->whereMonth('leads.executionDate', $this->currentMonth)
            ->groupBy('product_categories.id')
            ->get();  

        // $leads = DB::table('lead_products')
        //     ->join('leads', 'lead_products.lead_id', '=', 'leads.id')
        //     ->join('product_categories', 'lead_products.product_id', '=', 'product_categories.id')
        //     ->select(
        //         'product_categories.category',
        //         DB::raw('SUM(leads.leadValue) as totalValue'),
        //         DB::raw('SUM(leads.advanceValue) as totalAdvanceValue')
        //     )
        //     ->whereYear('leads.executionDate', $this->currentYear)
        //     ->whereMonth('leads.executionDate', $this->currentMonth)
        //     ->groupBy('product_categories.category')
        //     ->get();  

        return view('livewire.sales.sales-category',[
            'leads' => $leads,
            'data' => $data,
            'month'=>$month,
            'year'=>$year,
        ]);
    }
}

