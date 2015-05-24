<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Team;

class PagesController extends Controller {

    public function home()
    {
        return view('pages.home');
    }
	public function about()
	{
		return view('pages.about');
	}
	public function join()
	{
		return view('pages.join');
	}
    public function meet()
    {
        $team = Team::all();
        return view('pages.meet',compact('team'));
    }
}
