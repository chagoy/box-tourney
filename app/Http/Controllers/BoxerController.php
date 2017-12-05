<?php

namespace App\Http\Controllers;

use App\Weight;
use App\Boxer;

use Carbon\Carbon;
use Illuminate\Http\Request;

class BoxerController extends Controller
{
    public function index()
    {
    	$boxers = Boxer::orderBy('id', 'asc')
            ->where('approved', 1)
    		->get()
            ->sortBy('name');

    	return view('boxers.index', compact('boxers'));
    }

    public function category($category)
    {
        $boxers = Boxer::orderBy($category, 'desc')
            ->get();
        return view('boxers.index', compact('boxers'));
    }
    
    public function show(Boxer $boxer)
    {
        $similar = $boxer->similar();

    	return view('boxers.show', compact('boxer', 'similar'));
    }

    public function create()
    {
        $weights = Weight::get();

        return view('boxers.create', [
            'boxers' => Boxer::all(),
            'weights' => $weights
        ]);
    }

    public function store(Request $request) 
    {
        $this->validate(request(), [
            'name' => 'required|unique:boxers',
            'weight' => 'required',
            'country' => 'required',
            'image' => 'required|image',
            'dob' => 'required',
            'power' => 'required|integer|between:1,100',
            'speed' => 'required|integer|between:1,100',
            'offense' => 'required|integer|between:1,100',
            'defense' => 'required|integer|between:1,100',
            'chin' => 'required|integer|between:1,100',
            'stamina' => 'required|integer|between:1,100',
        ]);

        $date = date('Y-m-d', strtotime($request['dob']));

        $boxer = Boxer::create([
            'slug' => $this->slug($request['name']),
            'dob' => Carbon::createFromFormat('Y-m-d', $date)->toDateTimeString(),
            'name' => $request['name'],
            'weight_id' => $request['weight'],
            'power' => $request['power'],
            'speed' => $request['speed'],
            'offense' => $request['offense'],
            'defense' => $request['defense'],
            'chin' => $request['chin'],
            'stamina' => $request['stamina'],
            'country' => $request['country'],
            'image_path' => request()->file('image')->store('images', 'public')
        ]);

        return back();
    }

    public function slug($name)
    {
        return strtolower(preg_replace("/[^A-Za-z0-9]/", "", $name));
    }
}
