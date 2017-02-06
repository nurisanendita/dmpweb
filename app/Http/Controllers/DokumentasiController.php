<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
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

class DokumentasiController extends Controller
{
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
    $image = $image->move(public_path() . "/images/" . $imgname);

    $Keterangan_Foto = $request->input('input_keteranganfoto');

    DB::table('dokumentasi')->insert([
            'foto' => $image,
            'keterangan_foto' => $Keterangan_Foto,
          ]);
    // return redirect('dokumentasi_index');
    return $image;
    }

    public function show()
    {
      $dokumentasi1 = Dokumentasi::find(1);
      $dokumentasi2 = Dokumentasi::find(3);
      // $agenda3 = Agenda::find(3);
      // $agenda4 = Agenda::find(4);
      // $agenda5 = Agenda::find(5);
      // $agenda6 = Agenda::find(6);
      return view('dokumentasi.dokumentasi', compact('dokumentasi1','dokumentasi2'));
    }

  public function edit($id)
  {
    $dokumentasi = Dokumentasi::find($id);
      return view('dokumentasi.edit',compact('dokumentasi'));
  }

  public function update($id)
  {
    $dokumentasi = Dokumentasi::find($id);
    $image = $request->file('input_foto');
    $imgname = $image->getClientOriginalName();
    $image = $image->move(public_path() . "/images/" . $imgname);

    $dokumentasi->keterangan_foto = Request::input('input_keteranganfoto');

    $agenda->save();

    $agenda = Agenda::all();
    return redirect('dokumentasi_index');
  }

  public function destroy($id)
  {
    $agenda = Agenda::findorFail($id);
    $agenda->delete();
    return redirect('agenda_index');
  }
}
