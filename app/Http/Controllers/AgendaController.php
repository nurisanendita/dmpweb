<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
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
    $agenda1 = Agenda::where('kode_ruang','like','A%')->orderBy('tanggal_mulai','asc')->orderBy('tanggal_selesai','asc')->limit(4)->get();
    $agenda2 = Agenda::where('kode_ruang','like','B%')->orderBy('tanggal_mulai','asc')->orderBy('tanggal_selesai','asc')->limit(4)->get();
    $agenda3 = Agenda::where('kode_ruang','like','C%')->orderBy('tanggal_mulai','asc')->orderBy('tanggal_selesai','asc')->limit(4)->get();
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
    $this->validate($request, [
        'input_tanggalmulai' => 'required',
        'input_tanggalselesai' => 'required',
        'input_koderuang' => 'required',
        'input_namaruang' => 'required',
        'input_lantairuang' => 'required',
        'input_namakegiatan' => 'required',
        'input_keterangan' => 'required',
    ]);

    if ($validator->fails()) {
            return redirect('/agenda_create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $Tanggal_Mulai = $request->input('input_tanggalmulai');
        $Tanggal_Selesai = $request->input('input_tanggalselesai');
        $Kode_Ruang = $request->input('input_koderuang');
        $Nama_Ruang = $request->input('input_namaruang');
        $Lantai_Ruang = $request->input('input_lantairuang');
        $Nama_Kegiatan = $request->input('input_namakegiatan');
        $Keterangan_Acara = $request->input('input_keterangan');

        DB::table('agenda')->insert([
                'tanggal_mulai' => $Tanggal_Mulai,
                'tanggal_selesai' => $Tanggal_Selesai,
                'kode_ruang' => $Kode_Ruang,
                'nama_ruang' => $Nama_Ruang,
                'lantai' => $Lantai_Ruang,
                'nama_acara' => $Nama_Kegiatan,
                'keterangan_acara' => $Keterangan_Acara,
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
    $agenda->tanggal_mulai = $request->input('input_tanggalmulai');
    $agenda->tanggal_selesai = $request->input('input_tanggalselesai');
    $agenda->kode_ruang = $request->input('input_koderuang');
    $agenda->nama_ruang = $request->input('input_namaruang');
    $agenda->lantai = $request->input('input_lantairuang');
    $agenda->nama_acara = $request->input('input_namakegiatan');
    $agenda->keterangan_acara = $request->input('input_keterangan');
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
