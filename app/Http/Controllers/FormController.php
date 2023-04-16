<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        
 try {
    // dd($request);
        // Your existing code...
        $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'airdrop_address' => 'required',
        'token_amount' => 'required',
        'payment_currency' => 'required',
        'metamask_receipt' => 'required',
    ]);

    $user = new User;
    $user->first_name = $request->first_name;
    $user->last_name = $request->last_name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->airdrop_address = $request->airdrop_address;
    $user->token_amount = $request->token_amount;
    $user->payment_currency = $request->payment_currency;
    $user->metamask_receipt = $request->metamask_receipt;
    $user->save();

    return response()->json(['message' => 'Form submitted successfully']);
        
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
    }

        // Redirect the user to the home page with a success message
        // return redirect()->route('home')->with('success', 'Form submitted successfully!');
    
}