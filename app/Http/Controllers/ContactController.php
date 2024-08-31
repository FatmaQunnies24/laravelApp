<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Carbon\Carbon;
class ContactController extends Controller
{
    public function index()
    {
      
            $_Contact = Contact::take(6)->get();
        
            return response()->json([
                'status' => true,
                'Contact' => $_Contact
            ], 200);
        }
    
        public function store(Request $request)
        {
        
                $_Contact =  Contact::create([
                    'subject' => $request->subject,
                    'email' =>$request->email,
                    'name' => $request->name,
                    'message' =>$request->message,
                 

                   
                    
                ]);
           
    
                return response()->json([
                    'status' => true,
                    'message' => 'Contact Created successfully',
                    'Contact' => $_Contact
                ], 201);
        
            
        }
    }