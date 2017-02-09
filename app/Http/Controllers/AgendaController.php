<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Agenda;
use App\Models\Ruangan;
use App\Models\RekorSkrg;
use App\Models\RekorTercapai;
use App\Models\Banners;
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

    $agenda1 = DB::table('agenda')
                  ->join('ruangan','agenda.ruangan_id','=','ruangan.id')
                  ->select('agenda.*','ruangan.kode_ruang','ruangan.nama_ruang','ruangan.lantai')
                  ->orderBy('tanggal_mulai','desc')->orderBy('tanggal_selesai','asc')
                  ->where('tanggal_selesai','>','sysdate')->offset(0)->limit(4)->get();
    $agenda2 = DB::table('agenda')
                  ->join('ruangan','agenda.ruangan_id','=','ruangan.id')
                  ->select('agenda.*','ruangan.kode_ruang','ruangan.nama_ruang','ruangan.lantai')
                  ->orderBy('tanggal_mulai','desc')->orderBy('tanggal_selesai','asc')
                  ->where('tanggal_selesai','>','sysdate')->offset(4)->limit(4)->get();
    $agenda3 = DB::table('agenda')
                  ->join('ruangan','agenda.ruangan_id','=','ruangan.id')
                  ->select('agenda.*','ruangan.kode_ruang','ruangan.nama_ruang','ruangan.lantai')
                  ->orderBy('tanggal_mulai','desc')->orderBy('tanggal_selesai','asc')
                  ->where('tanggal_selesai','>','sysdate')->offset(8)->limit(4)->get();

    // $agenda1 = Agenda::
    // $agenda2 = Agenda::orderBy('tanggal_mulai','desc')->orderBy('tanggal_selesai','asc')->where('tanggal_selesai','>','sysdate')->offset(4)->limit(4)->get();
    // $agenda3 = Agenda::orderBy('tanggal_mulai','desc')->orderBy('tanggal_selesai','asc')->where('tanggal_selesai','>','sysdate')->offset(8)->limit(4)->get();
    $rekorskrg = RekorSkrg::orderBy('id','desc')->limit(1)->get();
    $rekortercapai = RekorTercapai::orderBy('id','desc')->limit(1)->get();
    $banners = Banners::orderBy('id','desc')->limit(3)->get();
    return view('welcome', compact('agenda1','agenda2','agenda3','rekorskrg','rekortercapai','banners'));
  }

  // public function __construct()
  //   {
  //       $this->middleware('auth');
  //   }

  public function index()
  {
    $agenda = DB::table('agenda')
                  ->join('ruangan','agenda.ruangan_id','=','ruangan.id')
                  ->select('agenda.*','ruangan.kode_ruang','ruangan.nama_ruang','ruangan.lantai')->get();
    return view('agenda.index', compact('agenda'));
  }

  public function create()
  {
    $ruangan = Ruangan::all();
        return view('agenda.create', compact('ruangan'));
  }

  public function store(Request $request)
  {
    $this->validate($request, [
        'input_tanggalmulai' => 'required',
        'input_tanggalselesai' => 'required',
        'input_koderuang' => 'required',
        'input_namakegiatan' => 'required',
        'input_keterangan' => 'required',
    ]);

        $Tanggal_Mulai = $request->input('input_tanggalmulai');
        $Tanggal_Selesai = $request->input('input_tanggalselesai');
        $Ruangan = $request->input('input_koderuang');
        $Nama_Kegiatan = $request->input('input_namakegiatan');
        $Keterangan_Acara = $request->input('input_keterangan');

        DB::table('agenda')->insert([
                'tanggal_mulai' => $Tanggal_Mulai,
                'tanggal_selesai' => $Tanggal_Selesai,
                'ruangan_id' => $Ruangan,
                'nama_acara' => $Nama_Kegiatan,
                'keterangan_acara' => $Keterangan_Acara,
              ]);
        return redirect('agenda_index');
    }

  public function edit($id)
  {
    $agenda = DB::table('agenda')
                  ->join('ruangan','agenda.ruangan_id','=','ruangan.id')
                  ->select('agenda.*','ruangan.kode_ruang','ruangan.nama_ruang','ruangan.lantai')
                  ->where('agenda.id',$id)->first();
    $ruangan = Ruangan::all();
      return view('agenda.edit',compact('agenda','ruangan'));
  }

  public function update($id, Request $request)
  {
    $agenda = DB::table('agenda')
                  ->join('ruangan','agenda.ruangan_id','=','ruangan.id')
                  ->select('agenda.*','ruangan.kode_ruang','ruangan.nama_ruang','ruangan.lantai')
                  ->where('agenda.id',$id)->first();

    $this->validate($request, [
        'input_tanggalmulai' => 'required',
        'input_tanggalselesai' => 'required',
        'input_koderuang' => 'required',
        'input_namakegiatan' => 'required',
        'input_keterangan' => 'required',
    ]);

    $agenda->tanggal_mulai = $request->input('input_tanggalmulai');
    $agenda->tanggal_selesai = $request->input('input_tanggalselesai');
    $agenda->ruangan_id = $request->input('input_koderuang');
    $agenda->nama_acara = $request->input('input_namakegiatan');
    $agenda->keterangan_acara = $request->input('input_keterangan');
    // $agenda->save();

    $agenda = DB::table('agenda')
                  ->join('ruangan','agenda.ruangan_id','=','ruangan.id')
                  ->select('agenda.*','ruangan.kode_ruang','ruangan.nama_ruang','ruangan.lantai')->get();
    return redirect('agenda_index');
  }

  public function destroy($id)
  {
    $agenda = Agenda::findorFail($id);
    $agenda->delete();
    return redirect('agenda_index');
  }

}
