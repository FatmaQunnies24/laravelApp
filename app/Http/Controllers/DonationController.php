<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Carbon\Carbon;

class DonationController extends Controller
{
    public function index()
    {
        $_Donation = Donation::take(3)->get();
    
        return response()->json([
            'status' => true,
            'Donation' => $_Donation
        ], 200);
    }

    public function store(Request $request)
    {
     
            $_Donation =  Donation::create([
                'ammount' => $request->ammount,
         
                
            ]);
        
            return response()->json([
                'status' => true,
                'message' => 'Donation Created successfully',
                'Donation' => $_Donation
            ], 201);
        }
}
