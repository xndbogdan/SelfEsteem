<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Questionnaire as Questionnaire;
namespace App\Http\Controllers;


class ProfileController extends Controller
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

    public function questionnaires()
    {
        $questionnaires = \App\Questionnaire::get();
        return view('questionnaires',compact('questionnaires'));
    }
}