<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\View\View;
  
class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    

    public function index(){
            return redirect()->route(auth()->user()->type .'.dashboard');
    } 

    
    public function SuperAdminDashboard(): View
    {
        return view('Admin.dashboard');
    }


    public function truckerDashboard()
    {
        
        return view('Trucker.dashboard');
    } 
  
    public function shipperDashboard(): View
    {
        return view('Shipper.dashboard');
    }
  
   
    public function brokerDashboard(): View
    {
        return view('Broker.dashboard');
    }
}