<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Campaign;
use Auth;
use Illuminate\Http\Request;
class homeController extends Controller
{
    //
    //return all campaings
    public function showCampaignsOnHome() {
        $campaigns = Campaign::paginate(10);
        return view('index', compact('campaigns'));
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    //return all campaings on the dashbaord
    public function index() {
        //get campaigns based on the user login
        $campaigns = Auth::user()->Campaign()->get();
       // $campaigns = Campaign::paginate(10);
        return view('dashboard', compact('campaigns'));
    }

}

