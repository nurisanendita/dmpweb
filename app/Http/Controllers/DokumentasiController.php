<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Agenda;
use App\Models\Dokumentasi;
use App\Models\KodeRuang;
use App\Models\LantaiRuang;
use App\Models\NamaRuang;
use App\Counter;
use Session;
use Storage;
use Image;
use File;

class DokumentasiController extends Controller
{
  public function show()
  {
    // if($dokumentasi = Dokumentasi::count() < 6)
    // {
    //   Session::flash('message', 'Masukkan Seluruh (6) Foto');
    //   return redirect('dokumentasi_index');
    // }

    $dokumentasi1 = Dokumentasi::find(1);
    $dokumentasi2 = Dokumentasi::find(2);
    // $dokumentasi3 = Dokumentasi::find(3);
    // $dokumentasi4 = Dokumentasi::find(4);
    // $dokumentasi5 = Dokumentasi::find(5);
    // $dokumentasi6 = Dokumentasi::find(6);

    // $quote = $request->input('input_quote');
    // function submit(){
    //   if(!empty($quote)){
    //     Session::flash('message', 'Quote Telah Diperbarui');
    //     return redirect('quote_index');
    //   }
    //   else {
    //     Session::flash('message', 'Masukkan Quote');
    //     return redirect('quote_index');
    //   }
    // }
    return view('dokumentasi.dokumentasi', compact('dokumentasi1','dokumentasi2'));
  }

  public function __construct()
    {
        $this->middleware('web');
    }

  public function index()
  {
    $dokumentasi = Dokumentasi::all();
    return view('dokumentasi.index', compact('dokumentasi'));
  }

  public function create()
  {
    if($dokumentasi = Dokumentasi::where('id','=','6')->count())
    {
      Session::flash('message', 'Maksimum Menampilkan 6 Dokumentasi');
      return redirect('dokumentasi_index');
    }
        return view('dokumentasi.create');
  }

  public function store(Request $request)
  {
    $image = $request->file('input_foto');
    $imgname = $image->getClientOriginalName();
    // $path = url('/') ;
    $image = $image->move(public_path() . "/images/", $imgname);
    $save_path = "images/" . $imgname;
    $Keterangan_Foto = $request->input_keteranganfoto;

    DB::table('dokumentasi')->insert([
            'foto' => $save_path,
            'keterangan_foto' => $Keterangan_Foto,
          ]);
    return redirect('dokumentasi_index');
    // return $Keterangan_Foto;
    }

  public function edit($id)
  {
    $dokumentasi = Dokumentasi::find($id);
      return view('dokumentasi.edit',compact('dokumentasi'));
  }

  public function update($id, Request $request)
  {
    $dokumentasi = Dokumentasi::find($id);

    $image = $request->file('input_foto');
    $imgname = $image->getClientOriginalName();
    File::delete(public_path() . '/' .$dokumentasi->foto);
    $newSavePath = "images/" . $imgname;
    $image = $image->move(public_path() . "/images/", $imgname);

    $dokumentasi->foto = $newSavePath;
    $dokumentasi->keterangan_foto = $request->input_keteranganfoto;
    $dokumentasi->save();
    // $dokumentasi = Dokumentasi::all();
    return redirect('dokumentasi_index');
  }

  public function destroy($id)
  {
    $agenda = Agenda::findorFail($id);
    $agenda->delete();
    return redirect('agenda_index');
  }
}
