<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\Lead;
use App\Models\LeadProduct;
use App\Models\Product;
use App\Models\Client;
use App\Models\Salessource;
use App\Models\Salestype;
use App\Models\Activity;
use App\Models\Chart;


class ReportsController extends Controller
{
    

    public function index():View
    {
        $monthNames = [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December',
        ];
        // Pobieramy aktualny rok
        $currentYear = Carbon::now()->year;

        $salesThisYear = DB::table('leads')
        ->select(DB::raw('SUM(leadValue) as total_leadValue'), DB::raw('MONTH(executionDate) as month'))
        ->where('user_id', Auth::user()->id)
        ->whereYear('executionDate', $currentYear)
        ->groupBy(DB::raw('MONTH(executionDate)'))
        ->orderBy(DB::raw('MONTH(executionDate)'))
        ->get();
        
        for ($i=0; $i<=count($salesThisYear); $i++) {
            $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }
        
        $labels = [];
        foreach ($salesThisYear as $sale) {
            $month = $sale->month;
            $labels[] = $monthNames[$month];
        }

        //$labels = $salesThisYear->pluck('month')->toArray();
        $dataset = $salesThisYear->pluck('total_leadValue')->toArray();

        $chartData = [
            'labels' => json_encode($labels),
            'dataset' => json_encode($dataset),
            'colours' => json_encode($colours), // Zakładając, że masz już utworzoną tablicę kolorów
        ];

        //////////////////////////////////////
        $clientsThisYear = DB::table('clients')
            ->select('clients.name', 'clients.phone', 'clients.email', DB::raw('SUM(advanceValue) as total_advanceValue'))
            ->join('leads', 'clients.id', '=', 'leads.client_id')
            ->where('clients.user_id', Auth::user()->id)
            ->whereYear('leads.executionDate', $currentYear)
            ->groupBy('clients.name', 'clients.phone', 'clients.email')
            ->orderByDesc('total_advanceValue')
            ->take(10)
            ->get();


        // Tworzymy tablice danych na potrzeby wykresu
        $clientsLabels = $clientsThisYear->pluck('name')->toArray(); // Oś X - dane klientów
        $clientsData = $clientsThisYear->pluck('total_advanceValue')->toArray(); // Oś Y - łączna wartość sprzedaży

        // Losujemy kolory dla słupków na wykresie
        $clientsColours = [];
        for ($i = 0; $i < count($clientsThisYear); $i++) {
            $clientsColours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }

        $chartDataClient = [
            'labels' => json_encode($clientsLabels),
            'dataset' => json_encode($clientsData),
            'colours' => json_encode($clientsColours), // Zakładając, że masz już utworzoną tablicę kolorów
        ];

        ///////////////////////////////////

        $productsThisYear = DB::table('products')
            ->select('products.name', DB::raw('SUM(leads.advanceValue) as total_advanceValue'))
            ->join('lead_products', 'products.id', '=', 'lead_products.product_id')
            ->join('leads', 'lead_products.lead_id', '=', 'leads.id')
            ->where('products.user_id', Auth::user()->id)
            ->whereYear('leads.executionDate', $currentYear)
            ->groupBy('products.name')
            ->orderByDesc('total_advanceValue')
            ->get();

        $productLabels = $productsThisYear->pluck('name');
        $productData = $productsThisYear->pluck('total_advanceValue');

        $productsColours = [];
        for ($i = 0; $i < count($productsThisYear); $i++) {
            $productsColours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }
        
        $chartDataProduct = [
            'labels' => json_encode($productLabels),
            'dataset' => json_encode($productData),
            'colours' => json_encode($productsColours), // Zakładając, że masz już utworzoną tablicę kolorów
        ];

        //dd($chartData);
        return view('reports.index',compact('currentYear','chartData','chartDataClient','chartDataProduct' ));
    }
}
