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


  public function update()
  {

      return view('agenda.edit');
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
        return redirect('agenda_index');
    }

  }
