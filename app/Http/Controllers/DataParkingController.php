<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\DataParking;
use App\Models\TarifParkir;
use Auth;

class DataParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataparking = DataParking::where('user_id', Auth::user()->id)->get();
        
        if(DataParking::where('user_id', Auth::user()->id)->doesntExist()){
            request(session()->flash('notfounddata'));
        }elseif(request('search')){
            $dataparking = DataParking::where('platnomor', 'LIKE', '%'.request('search').'%')->get();
        }
        else{
            $dataparking;    
        }

       
    
                /* end for searching form */
        $countingmobilterparkir = DataParking::where('user_id', Auth::user()->id)->where('kendaraan', 'LIKE', '%'.'Mobil'.'%')->where('status', 'Masuk')->count();
        $countingmotorterparkir = DataParking::where('user_id', Auth::user()->id)->where('kendaraan', 'LIKE', '%'.'Motor'.'%')->where('status', 'Masuk')->count();
        $kendaraankeluar = DataParking::where('user_id', Auth::user()->id)->where('status', 'keluar')->count();
        $totalpendapatan = DataParking::where('user_id', Auth::user()->id)->sum('tarif');
        return view('eparking.welcome', ['dataparking' => $dataparking, 'countingmobilterparkir' => $countingmobilterparkir, 'pendapatan' => $totalpendapatan, 'countingmotorterparkir' => $countingmotorterparkir, 'kendaraankeluar' => $kendaraankeluar]);
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
        $tarifparking = TarifParkir::all();
        $addparking = new DataParking;
        $addparking->platnomor = $request->platnomor;
        $addparking->kendaraan = $request->kendaraan;
        if($request->kendaraan == "Motor"){
            $addparking->tarif = $tarifparking[0]->tarifmotor;
        }elseif($request->kendaraan == "Mobil"){
            $addparking->tarif = $tarifparking[0]->tarifmobil;
        }else{
            $addparking->tarif = $tarifparking[0]->tariflainnya;
        }
        $addparking->user_id = Auth::user()->id;
        $addparking->status = "Masuk";
        $addparking->save();
 

       $request->session()->flash('success', 'Data Telah Ditambahkan');
       return redirect('/user/eparking');
      
      
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
            return redirect('/user/eparking');
        }
        
        return view('eparking.cetak-karcis', ['printing' =>$printing]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewdestroy()
    {
        return view('eparking.uniqkolom');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    


  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
        $statusdata = DataParking::find($id);
        $statusdata->status = "Keluar";
        $statusdata->save();
        return redirect('/user/eparking');
    }
   
}
