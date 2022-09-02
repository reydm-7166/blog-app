<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Main;

class MainIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function search(Request $request){

        $all = DB::table('dish')
        ->join('mains', 'dish.id', '=', 'mains.dish_id')
        ->leftJoin('seconds', 'seconds.mains_id', '=', 'mains.id')
        ->where('mains.main1', $request->main1)
        ->orWhere('mains.main2', $request->main2)
        ->orWhere('mains.main1', $request->main2)
        ->orWhere('mains.main2', $request->main1)
        ->select('*', 'mains.id as mainsID', 'dish.id as dishID', 'seconds.id as secondsID')
        ->get();


        //print_r($all);
        //dd($request);
        //$primary = Main::where('main1', $request->main1)->orWhere('main2', $request->main2)->get();

        return view('user.result')->with('primary', $all);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($dish, $id)
    {
        return "im show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
