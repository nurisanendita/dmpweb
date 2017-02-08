<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Quotes;
use App\Counter;
use Session;

class QuoteController extends Controller
{

  // public function __construct()
  //   {
  //       $this->middleware('auth');
  //   }

  public function index()
  {
    $quotes = Quotes::all();
    return view('quote.index', compact('quotes'));
  }

  public function create()
  {
        return view('quote.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
        'input_quote' => 'required',
    ]);

        $Quote = $request->input('input_quote');

        DB::table('quotes')->insert([
                'quote' => $Quote,
              ]);
        return redirect('quote_index');
    }

  public function edit($id)
  {
    $quotes = Quotes::findorFail($id);
      return view('quote.edit', compact('quotes'));
  }

  public function update($id, Request $request)
  {
    $quotes = Quotes::find($id);

    $this->validate($request, [
        'input_quote' => 'required',
    ]);

    $quotes->quote = $request->input('input_quote');
    $quotes->save();

    $quotes = Quotes::all();
    return redirect('quote_index');
  }

  public function destroy($id)
  {
    $quotes = Quotes::findorFail($id);
    $quotes->delete();
    return redirect('quote_index');
  }
}
