<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Mcamara\LaravelLocalization;

use App\Models\Lead;
use App\Models\LeadProduct;
use App\Models\Product;
use App\Models\Client;
use App\Models\Salessource;
use App\Models\Salestype;
use App\Models\Activity;
use App\Models\Chart;

class DashboardController extends Controller
{
    public function index():View
    {
        $currentYear = Carbon::now()->year;
        $currentMonth = Carbon::now()->month;
        $currentDay = Carbon::now()->day;

        $startDate = date("Y-m-01");
        $endDate = date("Y-m-t");

        $sales = Lead::select('salestypes.type as type', DB::raw('COUNT(*) as count'))
            ->join('salestypes', 'leads.type_id', '=', 'salestypes.id')
            ->where('leads.user_id', Auth::user()->id)
            ->whereMonth('leads.executionDate', $currentMonth)
            ->groupBy('salestypes.type')
            ->get();

        $clients = Lead::select('clients.id as client_id','clients.name as name', 'clients.phone as phone', 'clients.email as email')
            ->join('clients', 'leads.client_id', '=', 'clients.id')
            ->where('leads.user_id', Auth::user()->id)
            ->whereMonth('leads.executionDate', $currentMonth)
            ->groupBy('clients.id')
            ->get();   
            
        $leads = Lead::where('user_id',Auth::user()->id)
            ->whereBetween('executionDate', [$startDate, $endDate ])
            ->orderBy('created_at','asc')
            ->paginate(10);            
        //dd($clients);
        $days = [0 => 'Mon', 1 => 'Tue', 2 => 'Wed', 3 => 'Thu', 4 => 'Fri', 5 => 'Sat', 6 => 'Sun'];
        $num_days = date('t', strtotime($currentDay . '-' . $currentMonth . '-' . $currentYear));
        $num_days_last_month = date('j', strtotime('last day of previous month', strtotime($currentDay . '-' .$currentMonth . '-' . $currentYear)));
        $first_day_of_week = array_search(date('D', strtotime($currentYear . '-' . $currentMonth . '-1')), $days);

        //dd($locale);

        return view('dashboard',compact('sales','clients','days','num_days_last_month','first_day_of_week','currentDay','num_days','leads','currentYear','currentMonth' ));
    }
}

