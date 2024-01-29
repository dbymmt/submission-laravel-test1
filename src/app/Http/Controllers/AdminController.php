<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class AdminController extends Controller
{
    //
    public function index(Request $request){
        return view('admin');
    }
}
