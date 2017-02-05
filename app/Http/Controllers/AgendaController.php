<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
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

class AgendaController extends Controller
{
  public function index()
  {
    $agenda = Agenda::all();
    return view('agenda.index', compact('agenda'));
  }

  public function create()
  {
    if($agenda = Agenda::where('id','=','12')->count())
    {
      Session::flash('success', 'Event delete successfully!');
      return view('agenda.index');
    }
    $kodeRuang = KodeRuang::all();
    $namaRuang = NamaRuang::all();
    $lantaiRuang = LantaiRuang::all();
        return view('agenda.create', compact('kodeRuang','namaRuang','lantaiRuang'));
  }

  public function store(Request $request)
  {
        $Tanggal_Acara = Request::input('input_tanggal');
        $Kode_Ruang = Request::input('input_koderuang');
        $Nama_Ruang = Request::input('input_namaruang');
        $Lantai_Ruang = Request::input('input_lantairuang');
        // $Ditampilkan = Request::input('input_ditampilkan');
        $Nama_Kegiatan = Request::input('input_namakegiatan');
        $Keterangan_Acara = Request::input('input_keterangan');

        DB::table('agenda')->insert([
                'tanggal_acara' => $Tanggal_Acara,
                'kode_ruang' => $Kode_Ruang,
                'nama_ruang' => $Nama_Ruang,
                'lantai' => $Lantai_Ruang,
                'nama_acara' => $Nama_Kegiatan,
                'keterangan_acara' => $Keterangan_Acara,
                // 'ditampilkan' => $Ditampilkan,
              ]);
        return redirect('agenda_index');
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
