<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Banners;
use App\Counter;
use Session;
use Storage;
use Image;
use File;


class BannersController extends Controller
{
  // public function __construct()
  //   {
  //       $this->middleware('auth');
  //   }

  public function index()
  {
    $banners = Banners::all();
    return view('banners.index', compact('banners'));
  }

  public function create()
  {
        return view('banners.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
        'input_banner' => 'required',
    ]);

    $image = $request->file('input_banner');
    $imgname = $image->getClientOriginalName();
    // $path = url('/') ;
    $image = $image->move(public_path() . "/bannersUpload/", $imgname);
    $save_path = "images/" . $imgname;

    Banners::insert([
            'banner' => $save_path,
          ]);
    return redirect('banners_index');
    }

  public function edit($id)
  {
    $banners = Banners::find($id);
      return view('banners.edit',compact('banners'));
  }

  public function update($id, Request $request)
  {
    $banners = Banners::find($id);

    $this->validate($request, [
        'input_banner' => 'required',
    ]);

    $image = $request->file('input_banner');
    $imgname = $image->getClientOriginalName();
    File::delete(public_path() . '/' .$banners->banner);
    $newSavePath = "bannersUpload/" . $imgname;
    $image = $image->move(public_path() . "/bannersUpload/", $imgname);

    $banners->banner = $newSavePath;
    $banners->save();
    $banners = Banners::all();
    return redirect('banners_index');
  }

  public function destroy($id)
  {
    $banners = Banners::findorFail($id);
    $banners->delete();
    return redirect('banners_index');
  }
}
