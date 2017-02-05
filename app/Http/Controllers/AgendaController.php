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

class AgendaController extends Controller
{
  public function index()
  {
    $agenda = Agenda::all();
      return view('agenda.index', compact('agenda'));
  }

  public function create()
  {
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
        $Ditampilkan = Request::input('input_ditampilkan');
        $Nama_Kegiatan = Request::input('input_namakegiatan');
        $Keterangan_Acara = Request::input('input_keterangan');

        DB::table('agenda')->insert([
                'tanggal_acara' => $Tanggal_Acara,
                'kode_ruang' => $Kode_Ruang,
                'nama_ruang' => $Nama_Ruang,
                'lantai' => $Lantai_Ruang,
                'nama_acara' => $Nama_Kegiatan,
                'keterangan_acara' => $Keterangan_Acara,
                'ditampilkan' => $Ditampilkan,
            ]);

            if (DB::table('agenda')->ditampilkan > 12 && DB::table('agenda')->ditampilkan == 1){
              function myFunction() {
                  alert("Maksimum Ditampilkan 12 Agenda");
              }
              window.alert("myFunction");
              return redirect('agenda_create');
            }

        return redirect('agenda_index');
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
    $agenda->ditampilkan = Request::input('input_ditampilkan');
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
