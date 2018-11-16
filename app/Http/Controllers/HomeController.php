<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use App\Questionnaire_Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function questionnaires()
    {
        $questionnaires = Questionnaire::all();
        //$questionnaires_results = Questionnaire_Result::where() //TODO: ADD USER_ID to questionnaire result!!!!!
        return view('questionnaires',['questionnaires'=>$questionnaires]);
    }
}
