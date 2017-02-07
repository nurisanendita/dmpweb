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
  public function show()
  {
    if($agenda = Agenda::count() < 1)
    {
      Session::flash('message', 'Masukkan Agenda');
      return redirect('agenda_index');
    }
    $agenda1 = Agenda::where('kode_ruang','like','A%')->orderBy('tanggal_mulai','desc')->limit(4)->get();
    $agenda2 = Agenda::where('kode_ruang','like','B%')->orderBy('tanggal_mulai','desc')->limit(4)->get();
    $agenda3 = Agenda::where('kode_ruang','like','C%')->orderBy('tanggal_mulai','desc')->limit(4)->get();
    return view('welcome', compact('agenda1','agenda2','agenda3'));
  }

  // public function __construct()
  //   {
  //       $this->middleware('auth');
  //   }

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
        $Tanggal_Mulai = Request::input('input_tanggalmulai');
        $Tanggal_Selesai = Request::input('input_tanggalselesai');
        $Kode_Ruang = Request::input('input_koderuang');
        $Nama_Ruang = Request::input('input_namaruang');
        $Lantai_Ruang = Request::input('input_lantairuang');
        // $Ditampilkan = Request::input('input_ditampilkan');
        $Nama_Kegiatan = Request::input('input_namakegiatan');
        $Keterangan_Acara = Request::input('input_keterangan');

        DB::table('agenda')->insert([
                'tanggal_mulai' => $Tanggal_Mulai,
                'tanggal_selesai' => $Tanggal_Selesai,
                'kode_ruang' => $Kode_Ruang,
                'nama_ruang' => $Nama_Ruang,
                'lantai' => $Lantai_Ruang,
                'nama_acara' => $Nama_Kegiatan,
                'keterangan_acara' => $Keterangan_Acara,
                // 'ditampilkan' => $Ditampilkan,
              ]);
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
    $agenda->tanggal_mulai = Request::input('input_tanggalmulai');
    $agenda->tanggal_selesai = Request::input('input_tanggalselesai');
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
