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
    $quote = Quotes::all();
    return view('quote.index', compact('quote'));
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
    $quote = Quotes::find($id);
      return view('quote.edit',compact('quote');
  }

  public function update($id, Request $request)
  {
    $quote = Quotes::find($id);

    $this->validate($request, [
        'input_quote' => 'required',
    ]);

    $quote->quote = $request->input('input_quote');
    $agenda->save();

    $quote = Quotes::all();
    return redirect('/quote_index');
  }

  public function destroy($id)
  {
    $quote = Quotes::findorFail($id);
    $quote->delete();
    return redirect('quote_index');
  }
}
