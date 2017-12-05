<?php

namespace App\Http\Controllers;

use App\Boxer;
use App\Weight;
use App\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index() 
    {
    	$weights = Weight::get()->sortBy('dob');
    	
    	return view('tourney.index', compact('weights'));
    }

    public function show(Tournament $tournament)
    {
    	return view('tourney.show', compact('tournament'));
    }

    public function create($weight)
    {
    	$boxers = Boxer::where('weight_id', $weight)
            ->where('approved', 1)
    		->get()
            ->shuffle();

    	return view('tourney.create', compact('boxers'));
    }

    public function store()
    {
    	$tournament = Tournament::create([
    		'slug' => substr(sha1(date("H:i:s")), 0, 6)
    	]);

    	$data = request()->validate([
    		'test1' => 'required',
    		'test2' => 'required',
    		'test3' => 'required',
    		'test4' => 'required',
    		'test5' => 'required',
    		'test6' => 'required',
    		'test7' => 'required',
    		'test8' => 'required',
    	]);

    	foreach($data as $boxer) {
    		$tournament->boxers()->attach([
    			$boxer
    		]);
    	}
    	
    	return redirect($tournament->path());
    }

    public function test(Request $request)
    {
        $tournament = Tournament::create([
            'slug' => uniqid()
        ]);

        $boxers = array();

        foreach ($request->all() as $value) {
            if (is_numeric($value) && Boxer::find($value)) {
                array_push($boxers, $value);
            }
        }
        //need to add validation that the boxers exist in the db
        if (count($boxers) !== 8) {
                return back()->withErrors(['amount' => 'Please pick 8 boxers']);
        }

        for ($i = 0; $i < 8; $i++) {
            $tournament->boxers()->attach([$boxers[$i]]);
        }

        return redirect($tournament->path());
    }
}
