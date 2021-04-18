<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Customer;
use Illuminate\Support\Facades\Mail;


class QuestionController extends Controller
{
    public function index(Request $request){
        
        $user = Customer::where('email', request('email'))->first();

        if($user === null){
            $user = new Customer(['email' => request('email')]);
        }
        $user->name = request('name');

        $user->save();

        if($request->file == null){
            Question::create([
                'customer_id' => $user->id,
                'message' => $request->message,
                'image' => ''
            ]);
        }
        else{
            Question::create([
                'customer_id' => $user->id,
                'message' => $request->message,
                'image' => $request->file
            ]);
           
        }
    }
    
}
