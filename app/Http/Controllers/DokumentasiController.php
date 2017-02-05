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
        $Foto = $request->file('input_foto');
        $FileFoto = $Foto->getClientOriginalName();
        Storage::put('/', $FileFoto, file_get_contents($request->file('input_foto');->getRealPath()));

        $Dokumentasi = new Dokumentasi;
        $Dokumentasi->keterangan_foto = $request->input_keteranganfoto;
        $Dokumentasi->foto = $FileFoto;
        $Dokumentasi->save();

        return redirect('dokumentasi_index');
    }

    public function show()
    {
      $agenda1 = Agenda::find(1);
      $agenda2 = Agenda::find(2);
      $agenda3 = Agenda::find(3);
      $agenda4 = Agenda::find(4);
      $agenda5 = Agenda::find(5);
      $agenda6 = Agenda::find(6);
      $agenda7 = Agenda::find(7);
      $agenda8 = Agenda::find(8);
      $agenda9 = Agenda::find(9);
      $agenda10 = Agenda::find(10);
      $agenda11 = Agenda::find(11);
      $agenda12 = Agenda::find(12);
      return view('welcome', compact('agenda1','agenda2','agenda3','agenda4','agenda5','agenda6','agenda7','agenda8','agenda9','agenda10','agenda11','agenda12'));
    }

  public function edit($id)
  {
    $agenda = Agenda::find($id);
    $kodeRuang = KodeRuang::all();
    $namaRuang = NamaRuang::all();
    $lantaiRuang = LantaiRuang::all();
      return view('agenda.edit',compact('agenda','kodeRuang','namaRuang','lantaiRuang'));
      // return $agenda;
  }

  public function update($id)
  {
    $agenda = Agenda::find($id);
    $agenda->tanggal_acara = Request::input('input_tanggal');
    $agenda->kode_ruang = Request::input('input_koderuang');
    $agenda->nama_ruang = Request::input('input_namaruang');
    $agenda->lantai = Request::input('input_lantairuang');
    $agenda->nama_acara = Request::input('input_namakegiatan');
    $agenda->keterangan_acara = Request::input('input_keterangan');
    // $agenda->ditampilkan = Request::input('input_ditampilkan');
    $agenda->save();

    $agenda = Agenda::all();
    return redirect('/agenda_index');
  }

  public function destroy($id)
  {
    $agenda = Agenda::findorFail($id);
    $agenda->delete();
    return redirect('agenda_index');
  }
}
