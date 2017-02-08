<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\RekorSkrg;
use App\Counter;
use Session;

class RekorSkrgController extends Controller
{
  // public function __construct()
  //   {
  //       $this->middleware('auth');
  //   }

  public function index()
  {
    $rekorskrg = RekorSkrg::all();
    return view('rekorskrg.index', compact('rekorskrg'));
  }

  public function create()
  {
        return view('rekorskrg.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
        'input_hari_rekorskrg' => 'required',
        'input_jam_rekorskrg' => 'required',
    ]);

        $hari = $request->input('input_hari_rekorskrg');
        $jam = $request->input('input_jam_rekorskrg');

        DB::table('rekorskrg')->insert([
                'hari' => $hari,
                'jam' => $jam,
              ]);
        return redirect('rekorskrg_index');
    }

  public function edit($id)
  {
    $rekorskrg = RekorSkrg::findorFail($id);
      return view('rekorskrg.edit', compact('rekorskrg'));
  }

  public function update($id, Request $request)
  {
    $rekorskrg = RekorSkrg::find($id);

    $this->validate($request, [
        'input_hari_rekorskrg' => 'required',
        'input_jam_rekorskrg' => 'required',
    ]);

    $rekorskrg->hari = $request->input('input_hari_rekorskrg');
    $rekorskrg->jam = $request->input('input_jam_rekorskrg');
    $rekorskrg->save();

    $rekorskrg = RekorSkrg::all();
    return $rekorskrg;
    //return redirect('rekorskrg_index');
  }

  public function destroy($id)
  {
    $rekorskrg = RekorSkrg::findorFail($id);
    $rekorskrg->delete();
    return redirect('rekorskrg_index');
  }
}
