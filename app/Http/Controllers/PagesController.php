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
        $team = Team::orderBy('last_name')->get();
        $rows = round($team->count()/3 + .5) ;
        $last_row = $team->count() % 3;
        return view('pages.meet',compact('team'), compact('rows','last_row'));
    }
}
