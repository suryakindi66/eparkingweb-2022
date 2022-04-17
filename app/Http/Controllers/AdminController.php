<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\DataParking;
use App\Models\TarifParkir;
Use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countingmobilterparkir = DataParking::where('kendaraan', 'LIKE', '%'.'Mobil'.'%')->count();
        $countingmotorterparkir = DataParking::where('kendaraan', 'LIKE', '%'.'Motor'.'%')->count();
        $kendaraankeluar = DataParking::where('status', 'keluar')->count();
        $totalpendapatan = DataParking::sum('tarif');
     
       
        return view('adminpage.dashboard', 
        ['countingmobilterparkir'=>$countingmobilterparkir, 'countingmotorterparkir'=>$countingmotorterparkir, 'kendaraankeluar'=>$kendaraankeluar, 
        'totalpendapatan'=>$totalpendapatan]);
        
    }
    public function postlogin(Request $request)
    {
      if(Auth::attempt($request->only('name','password'))){
          $request->session()->regenerate();
          
        return redirect()->intended('/admin/dashboard');
      }
      $request->session()->flash('erorlogin' , 'Username / Password Salah !');
      return redirect('/admin/login');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewlogin()
    {
        return view('adminpage.login');
    }
    public function viewdatauser()
    {
        $user = User::where('role', 'user')->get();
        $countingmobilterparkir = DataParking::where('kendaraan', 'LIKE', '%'.'Mobil'.'%')->count();
        $countingmotorterparkir = DataParking::where('kendaraan', 'LIKE', '%'.'Motor'.'%')->count();
        $kendaraankeluar = DataParking::where('status', 'keluar')->count();
        $totalpendapatan = DataParking::sum('tarif');
        return view('adminpage.datauser', ['user'=>$user, 'countingmobilterparkir'=>$countingmobilterparkir, 'countingmotorterparkir'=>$countingmotorterparkir, 'kendaraankeluar'=>$kendaraankeluar, 
        'totalpendapatan'=>$totalpendapatan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function viewdataparkir()
    {
        
        $tarifparkir = TarifParkir::where('id', '1')->get();
        $dataparking = DataParking::all();
        if(request('search')){
            $dataparking = DataParking::where('platnomor', 'LIKE', '%'.request('search').'%')->get();
        }else{
            $dataparking;
        }
        $countingmobilterparkir = DataParking::where('kendaraan', 'LIKE', '%'.'Mobil'.'%')->count();
        $countingmotorterparkir = DataParking::where('kendaraan', 'LIKE', '%'.'Motor'.'%')->count();
        $kendaraankeluar = DataParking::where('status', 'keluar')->count();
        $totalpendapatan = DataParking::sum('tarif');
     return view('adminpage.dataparkir', ['countingmobilterparkir'=>$countingmobilterparkir, 'countingmotorterparkir'=>$countingmotorterparkir, 'kendaraankeluar'=>$kendaraankeluar, 
     'pendapatan'=>$totalpendapatan, 'dataparking'=>$dataparking, 'tarifparkir'=>$tarifparkir]);
    }
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
    public function viewdetailuser($id)
    {
        $datauser = User::find($id);
        return view('adminpage.detailuser', ['datauser'=>$datauser]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postubahpw(request $request, $id)
    {
        $datauser = User::find($id);
        $datauser->name = $request->username;
        $datauser->password = bcrypt($request->password);
        $datauser->role = "user";
        $datauser->save();
        $request->session()->flash('ubahpwsuccess');
        return redirect('/admin/detail/'.$id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postdataparkir(Request $request)
    {
        $id = '1';
        $dataparking = TarifParkir::find($id);
        $dataparking->tarifmotor = $request->tarifmotor;
        $dataparking->tarifmobil = $request->tarifmobil;
        $dataparking->tariflainnya = $request->tariflainnya;
        $dataparking->save();
        $request->session()->flash('datatarifsukses');
        return redirect('/admin/dataparkir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteuser($id)
    {
        $datauser = User::find($id);
        $datauser->delete();
        return back();
    }

    public function status($id)
    {
        $statusdata = DataParking::find($id);
        $statusdata->status = "Keluar";
        $statusdata->save();
        return redirect('/admin/dataparkir');
    }
    public function export()
    {
        $dataparking = DataParking::all();
        $jumlahmotor = DataParking::where('kendaraan', 'Motor')->count();
        $jumlahmobil = DataParking::where('kendaraan', 'Mobil')->count();
        $jumlahlainnya = DataParking::where('kendaraan', 'lainnya')->count();
        $totalpendapatan = DataParking::sum('tarif');
        return view('adminpage.export', ['dataparking'=>$dataparking,'jumlahmotor'=>$jumlahmotor, 'jumlahmobil'=>$jumlahmobil, 'jumlahlainnya'=>$jumlahlainnya, 'pendapatan' => $totalpendapatan]);
    }
    public function deleteall(){
        DB::table('data_parkings')->delete();
        request(session()->flash('successdeletealldata'));
        return redirect('/admin/dataparkir');
    }
}
