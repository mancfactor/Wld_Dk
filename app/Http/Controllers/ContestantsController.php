<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\Contest;
use Exception;

class ContestantsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function index() {
        $contestants = User::Contestants()->paginate(10);

        return view('contestants.index')->with('contestants',$contestants);
    }
}
