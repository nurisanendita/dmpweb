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
use App\Models\Quotes;
use App\Counter;
use Session;
use Storage;
use Image;
use File;

class DokumentasiController extends Controller
{
  public function show(Request $request)
  {
    if($dokumentasi = Dokumentasi::count() < 1)
    {
      Session::flash('message', 'Masukkan Foto');
      return redirect('dokumentasi_index');
    }

    $dokumentasi = Dokumentasi::orderBy('id','desc')->limit(5)->get();
    $quotes = Quotes::orderBy('id','desc')->limit(1)->get();

    return view('dokumentasi.dokumentasi', compact('dokumentasi','quotes'));
  }

  // public function __construct()
  //   {
  //       $this->middleware('auth');
  //   }

  public function index()
  {
    $dokumentasi = Dokumentasi::all();
    return view('dokumentasi.index', compact('dokumentasi'));
  }

  public function create()
  {
        return view('dokumentasi.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
        'input_foto' => 'required',
        'input_keteranganfoto' => 'required|max:300',
        'input_judulfoto' => 'required|max:100',
        'input_tanggalfoto' => 'required',
    ]);

    $image = $request->file('input_foto');
    $imgname = $image->getClientOriginalName();
    // $path = url('/') ;
    $image = $image->move(public_path() . "/dokumentasiUpload/", $imgname);
    $save_path = "images/" . $imgname;

    $Keterangan_Foto = $request->input_keteranganfoto;
    $Judul_Foto = $request->input_judulfoto;
    $Tanggal_Foto = $request->input_tanggalfoto;

    DB::table('dokumentasi')->insert([
            'foto' => $save_path,
            'keterangan_foto' => $Keterangan_Foto,
            'judul_foto' => $Judul_Foto,
            'tanggal' => $Tanggal_Foto,
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

    $this->validate($request, [
        'input_foto' => 'required',
        'input_keteranganfoto' => 'required|max:300',
        'input_judulfoto' => 'required|max:100',
        'input_tanggalfoto' => 'required',
    ]);

    $image = $request->file('input_foto');
    $imgname = $image->getClientOriginalName();
    File::delete(public_path() . '/' .$dokumentasi->foto);
    $newSavePath = "images/" . $imgname;
    $image = $image->move(public_path() . "/dokumentasiUpload/", $imgname);

    $dokumentasi->foto = $newSavePath;
    $dokumentasi->keterangan_foto = $request->input_keteranganfoto;
    $dokumentasi->judul_foto = $request->input_judulfoto;
    $dokumentasi->tanggal = $request->input_tanggalfoto;

    $dokumentasi->save();
    $dokumentasi = Dokumentasi::all();
    return redirect('dokumentasi_index');
  }

  public function destroy($id)
  {
    $dokumentasi = Dokumentasi::findorFail($id);
    $dokumentasi->delete();
    return redirect('dokumentasi_index');
  }
}
