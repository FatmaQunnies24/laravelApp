<?php

namespace App\Http\Controllers;


use App\Models\Beginning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Carbon\Carbon;
class BeginningController extends Controller
{
    public function index()
    {
      
            $_Beginning = Beginning::first();
        
            return response()->json([
                'status' => true,
                'Beginning' => $_Beginning
            ], 200);
        }
    
        public function store(Request $request)
        {
                $_Beginning =  Beginning::create([
                    'p1' => $request->p1,
                    'p2' => $request->p2,
                    'p3' => $request->p3,
                  
                   
                    
                ]);
            
                return response()->json([
                    'status' => true,
                    'message' => 'Beginning Created successfully',
                    'Beginning' => $_Beginning
                ], 201);
           
        }

        public function update(Request $request, $id)
        {
            $beginning = Beginning::find(1);
        
            if (!$beginning) {
                return response()->json([
                    'status' => false,
                    'message' => 'Beginning not found'
                ], 404);
            }
        
            $beginning->p1 = $this->sanitizeOrPreserve($request->input('p1'), $beginning->p1);
            $beginning->p2 = $this->sanitizeOrPreserve($request->input('p2'), $beginning->p2);
            $beginning->p3 = $this->sanitizeOrPreserve($request->input('p3'), $beginning->p3);
        
            $beginning->save();
        
            return response()->json([
                'status' => true,
                'message' => 'Beginning updated successfully',
                'Beginning' => $beginning
            ], 200);
        }
        

        private function sanitizeOrPreserve($input, $currentValue)
        {
            if ($input == 'deleted') {
                return '  '; 
            }
            
            return $input !== null ? $input : $currentValue;
        }
        
    
    }        