<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormResponse;
class AdminController extends Controller
{
    public function index(){
        $FormResponse = FormResponse::all();
        return view('admin.index', compact('FormResponse'));
    }


}
