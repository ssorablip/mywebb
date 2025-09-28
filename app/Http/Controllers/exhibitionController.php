<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
class exhibitionController extends Controller
{
    public function index(){
        $exhibitions = DB::table('exhibitions')->get();
        return view("exhibition",compact('exhibitions'));
    }
}
