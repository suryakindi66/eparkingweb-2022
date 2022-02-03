<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataParking;
use DB;

class DataParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataparking = DataParking::all();
        $counting = DataParking::all()->count();
        $totalpendapatan = DB::table('data_parkings')->sum('tarif');
        return view('eparking.welcome', ['dataparking' => $dataparking, 'count' => $counting, 'pendapatan' => $totalpendapatan]);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addparking = new DataParking;
        $addparking->platnomor = $request->platnomor;
        $addparking->kendaraan = $request->kendaraan;
       if($request->kendaraan == "Mobil" || $request->kendaraan == "mobil"){
        $tarif = 2000;
        $addparking->tarif = $tarif;
        $addparking->save();
        return redirect('/eparking');
       }else{
           $tarif = 1000;
           $addparking->tarif = $tarif;
           $addparking->save();
           return redirect('/eparking');
       }
      
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $printing = DataParking::find($id);
        if($printing == false){
            return redirect('/eparking');
        }
        return view('eparking.cetak-karcis', ['printing' =>$printing]);
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
        $deletedata = DataParking::find($id);
        $deletedata->delete();
        return redirect('/eparking');
    }
}
