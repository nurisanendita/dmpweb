<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\RekorTercapai;
use App\Counter;
use Session;

class RekorTercapaiController extends Controller
{
  // public function __construct()
  //   {
  //       $this->middleware('auth');
  //   }

  public function index()
  {
    $rekortercapai = RekorTercapai::all();
    return view('rekortercapai.index', compact('rekortercapai'));
  }

  public function create()
  {
        return view('rekortercapai.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
        'input_hari_rekortercapai' => 'required',
        'input_jam_rekortercapai' => 'required',
    ]);

        $hari = $request->input('input_hari_rekortercapai');
        $jam = $request->input('input_jam_rekortercapai');

        DB::table('rekortercapai')->insert([
                'hari' => $hari,
                'jam' => $jam,
              ]);
        return redirect('rekortercapai_index');
    }

  public function edit($id)
  {
    $rekortercapai = RekorTercapai::findorFail($id);
      return view('rekortercapai.edit', compact('rekortercapai'));
  }

  public function update($id, Request $request)
  {
    $rekortercapai = RekorTercapai::findorFail($id);

    $this->validate($request, [
        'input_hari_rekortercapai' => 'required',
        'input_jam_rekortercapai' => 'required',
    ]);

    $rekortercapai->hari = $request->input('input_hari_rekortercapai');
    $rekortercapai->jam = $request->input('input_jam_rekortercapai');
    $rekortercapai->save();

    $rekortercapai = RekorTercapai::all();
    return redirect('rekortercapai_index');
  }

  public function destroy($id)
  {
    $rekortercapai = RekorTercapai::findorFail($id);
    $rekortercapai->delete();
    return redirect('rekortercapai_index');
  }
}
